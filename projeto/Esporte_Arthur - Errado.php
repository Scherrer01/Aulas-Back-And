<?php
class Esporte {
private $Jogadores;
private $modalidade;
private $associacao;
private $pontuacao;


public function __construct($Jogadores,$modalidade,$associacao,$pontuacao) {

$this->setjogadores($Jogadores);
$this->setModalidade($modalidade);
$this->setAssociacao($associacao);
$this->setPonto($pontuacao);


}

public function getJogadores() {  
return $this->Jogadores;

}


public function setJogadores($jogadores) {
$this->Jogadores = $jogadores;

}


public function getModalidade() {
return $this->modalidade;

}


public function setModalidade($modalidade) {
$this->modalidade = $modalidade;

}


public function getAssociacao() {
return $this->associacao;

}


public function setAssociacao($associacao) {
$this->associacao = $associacao;

}


public function getPonto() {
 return $this->pontuacao;

}


public function setPonto($pontuacao) {
$this->pontuacao = $pontuacao;

}

public function adicionarPontuacao($pontuacao) {
    $this->pontuacao =+ $pontuacao;
    echo "\nA pontução atual é de: ". $this->pontuacao;
}

public function jogaFeridos($quantidade) {
    $this->Jogadores -= $quantidade;
    echo "\nA quantidade de jogadores feridos nesse jogo é de: $quantidade","\n",
" A quantidade de jogadores no campo é de: ". $this->Jogadores; 


}
}

class f1 extends Esporte{
    private $titulos;

    function __construct($Jogadores, $modalidade, $associacao, $pontuacao,$titulos){
         parent :: __construct($Jogadores, $modalidade, $associacao, $pontuacao);
        $this-> setJogadores($Jogadores);
        $this-> setModalidade($modalidade);
        $this-> setAssociacao($associacao);
        $this-> setPonto($pontuacao);
        $this-> setTitulos($titulos);
    }

    function getTitulos(){
        return $this->titulos;
    }
    function setTitulos($titulos){
        $this->titulos -$titulos;
    }

   public function exibirInfo(){
    return "O " . $this->getModalidade() . " é um esporte de " . $this->getJogadores() . " pilotos na equipe " . $this->getAssociacao() . " possuindo " . $this->getPonto() . " pontos no campeonato, com " . $this->getTitulos() . " títulos.\n";
   }
}

class UFC extends Esporte{
    private $nocautes;
    private $titulos;

    public function  __construct($Jogadores, $modalidade, $associacao, $pontuacao, $nocautes, $titulos){
        parent :: __construct($Jogadores, $modalidade, $associacao, $pontuacao);
          $this-> setJogadores($Jogadores);
        $this-> setModalidade($modalidade);
        $this-> setAssociacao($associacao);
        $this-> setPonto($pontuacao);
        $this-> setTitulos($titulos);
        $this-> setNocautes($nocautes);
    }
    function getTitulos(){
        return;
    }
    function setTitulos($titulos){
        $this->titulos =$titulos;
    }
        function getNocautes(){
        return $this->nocautes;
    }
    function setNocautes($nocautes){
        $this->nocautes =$nocautes;
    }
    public function exibirInfo(){
    "O " . $this->getModalidade() . " é um esporte de " . $this->getJogadores() . " lutador(es) na associação " . $this->getAssociacao() . " possuindo " . $this->getPonto() . " pontos de ranking, com " . $this->getTitulos() . " títulos e " . $this->getNocautes() . " nocautes.\n";
        }
    


}

$jogo1 = new Esporte(22,"Futebol","Corinthians",200);
$jogo2 = new Esporte(10,"Volei","Osasco",500);
$jogo3= new Esporte(12, "Basquete","Oklahoma City Thunder",699);

$jogo1->adicionarPontuacao(400);
$jogo1->jogaFeridos(10);

$jogo2->adicionarPontuacao(-100);
$jogo2->jogaFeridos(2);

$jogo3->adicionarPontuacao(300);
$jogo3->jogaFeridos(5);

?>
