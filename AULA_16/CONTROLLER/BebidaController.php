<?php
require_once __DIR__ . '/../MODEL/BebidaDAO.php';
require_once __DIR__ . '/../MODEL/Bebida.php';

class BebidaController {
    private $dao;

    public function __construct() {
        $this->dao = new BebidaDAO();
    }

    // Lista todas as bebidas
    public function ler() {
        return $this->dao->lerBebidas();
    }

    public function criar($nome, $categoria, $volume, $valor, $qtde) {
        $bebida = new Bebida($nome, $categoria, $volume, $valor, $qtde);
        $this->dao->criarBebida($bebida); // CORRETO: singular
    }

    public function atualizar($nomeOriginal, $novoNome, $categoria, $volume, $valor, $qtde) {
        $this->dao->atualizarBebida($nomeOriginal, $novoNome, $categoria, $volume, $valor, $qtde); // CORRETO: singular
    }

    public function deletar($nome) {
        $this->dao->excluirBebida($nome); // CORRETO: singular
    }

    public function editar($nome) {
        return $this->dao->buscarPorNome($nome);
    }
}
?>