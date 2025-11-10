<?php
require_once __DIR__ . '/../MODEL/BebidaDAO.php';
require_once __DIR__ . '/../MODEL/Bebida.php';

class BebidaController {
    private $dao;

    // Construtor: cria o DAO (responsável por salvar e carregar)
    public function __construct() {
        $this->dao = new BebidaDAO();
    }

    // Lista todas as bebidas
    public function ler() {
        return $this->dao->lerBebidas();
    }

    public function criar($nome, $categoria, $volume, $valor, $qtde) {
        // Gera ID automaticamente com base no timestamp (exemplo simples)
        $id = time();
        $bebida = new Bebida($nome, $categoria, $volume, $valor, $qtde);
        $this->dao->criarBebidas($bebida);
    }

    // Atualizar bebida existente
    // Atualizar bebida existente
public function atualizar($nomeOriginal, $novoNome, $categoria, $volume, $valor, $qtde) {
    $this->dao->atualizarBebidas($nomeOriginal, $novoNome, $categoria, $volume, $valor, $qtde);
}
    // Deletar bebida existente
    public function deletar($nome) {
        $this->dao->excluirBebidas($nome);
    }

    public function editar($nome) {
    $bebidas = $this->dao->lerBebidas();
    return $bebidas[$nome] ?? null;
}
}
?>