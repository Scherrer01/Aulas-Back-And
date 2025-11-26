<?php
require_once __DIR__ . '/../MODEL/LivroDAO.php';
require_once __DIR__ . '/../MODEL/Livro.php';

class LivroController {
    private $dao;

    public function __construct() {
        $this->dao = new LivroDAO();
    }

    // Lista todos os livros
    public function ler() {
        return $this->dao->lerLivros();
    }

    // Criar novo livro
    public function criar($titulo, $autor, $ano, $genero, $quantidade) {
        $livro = new Livro($titulo, $autor, $ano, $genero, $quantidade);
        return $this->dao->criarLivro($livro);
    }

    // Atualizar livro existente
    public function atualizar($id, $titulo, $autor, $ano, $genero, $quantidade) {
        return $this->dao->atualizarLivro($id, $titulo, $autor, $ano, $genero, $quantidade);
    }

    // Deletar livro existente
    public function deletar($id) {
        return $this->dao->excluirLivro($id);
    }

    // Buscar livro para edição
    public function editar($id) {
        return $this->dao->buscarPorId($id);
    }
}
?>