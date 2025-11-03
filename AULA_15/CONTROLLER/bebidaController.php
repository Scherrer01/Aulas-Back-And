<?
require_once __DIR__ . '../MODEL/BebidaDAO.php';
require_once __DIR__ . '../MODEL/Bebida.php';

class bebidaController {
    private $dao;

    //Contrutor: cria o DAO (responsavel por salvar e carregar)
    public function __construct() {
        $this-> dao = new BebidaDAO();
    }

    //Lista todas as bebidas
    public function ler() {
        return $this->dao->lerBebidas();
    }

    public function criar($nome, $categoria, $volume, $valor, $qtde) {
        //Gera ID automaticamente com base no timestep(exemplo simples)
        //$id = time(); // Função caso o objeto tenha um atributo ID
        $id = time();
        $bebida = new Bebida($nome, $categoria, $volume, $valor, $qtde);
        $this->dao->criarBebidas($bebida);
    }

    //Atualizar bebida existente
    public function atualizar($nome, $valor, $qtde) {
        $this->dao->atualizarBebidas($nome, $valor, $qtde);
    }

    //Atualizar bebida existente
    public function deletar($nome) {
        $this->dao->excluirBebidas($nome);
    }


}


?>