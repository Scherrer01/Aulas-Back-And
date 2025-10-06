Cenário 4 – Ciclo da Vida
Na Terra, pessoas acaom engravidar, nascer, crescer, fazer escolhas e até doar
sangue para ajudar outras.

substantivos: Terra, pessoas, escolhas, sangue
Métodos: acaom, engravidar, nascer, crescer, fazer ,doar, ajudar

Pessoa: engravidar, nascer, crescer, fazerEscolha, doarSangue


<?
class Pessoa {
    private $nome;
    private $escolha;
    
    public function __construct($nome, $escolha){
        $this->nome = $nome;
        $this->escolha = $escolha;
    }

  public function setnome($nome) {
    $this->nome = ucwords (strtolower
    ($nome));
}

public function getnome() {
    return $this->nome;
}

 public function setescolha($escolha) {
    $this->escolha = ucwords (strtolower
    ($escolha));
}

public function getescolha() {
    return $this->escolha;
}

public function Treino() {
    return ("O(A) $this->nome pode $this->escolha");
}

}
//================================================================
class Ação {
    private $acao;
    
    
    public function __construct($acao){
        $this->acao = $acao;
        
    }

  public function setacao($acao) {
    $this->acao = ucwords (strtolower
    ($acao));
}

public function getacao() {
    return $this->acao;
}

public function Acao() {
    return ("Você escolheu $this->acao");
}

}
?>

Pessoa - Ação = Associação -> nenhum precisa do outro, mas se quiserem se conectam