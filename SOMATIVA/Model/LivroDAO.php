<?php
require_once __DIR__ . '/Connection.php';
require_once __DIR__ . '/Livro.php';

class LivroDAO {
    private $pdo;

    public function __construct() {
        $connection = new Connection();
        $this->pdo = $connection->getPdo();
    }

    // CREATE
    public function criarLivro(Livro $livro) {
        $sql = "INSERT INTO livros (titulo, autor, ano, genero, quantidade) 
                VALUES (:titulo, :autor, :ano, :genero, :quantidade)";
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':titulo' => $livro->getTitulo(),
            ':autor' => $livro->getAutor(),
            ':ano' => $livro->getAno(),
            ':genero' => $livro->getGenero(),
            ':quantidade' => $livro->getQuantidade()
        ]);
        
        return $this->pdo->lastInsertId();
    }

    // READ
    public function lerLivros() {
        $sql = "SELECT * FROM livros ORDER BY titulo";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // UPDATE
    public function atualizarLivro($id, $titulo, $autor, $ano, $genero, $quantidade) {
        $sql = "UPDATE livros 
                SET titulo = :titulo, autor = :autor, ano = :ano, 
                    genero = :genero, quantidade = :quantidade 
                WHERE id = :id";
        
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':titulo' => $titulo,
            ':autor' => $autor,
            ':ano' => $ano,
            ':genero' => $genero,
            ':quantidade' => $quantidade
        ]);
    }

    // DELETE
    public function excluirLivro($id) {
        $sql = "DELETE FROM livros WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }

    // Buscar por ID
    public function buscarPorId($id) {
        $sql = "SELECT * FROM livros WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Buscar por título
    public function buscarPorTitulo($titulo) {
        $sql = "SELECT * FROM livros WHERE titulo LIKE :titulo";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':titulo' => "%$titulo%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>