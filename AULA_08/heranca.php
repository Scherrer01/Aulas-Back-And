<?
class Animais {
    private $especie;
    private $habitat;
    private $sexo;
    private $alimentacao;

    public function __construct($especie, $habitat, $sexo, $alimentacao) {
        $this-> setEspecie($especie);
        $this-> setHabitat($habitat);
        $this-> setSexo($sexo);
        $this-> setAlimentacao($alimentacao);
    }

    public function setEspecie($especie) {
        $this->especie = $especie;
    }
    public function getEspecie() {
        return $this-> especie;
    }

 public function setHabitat($habitat) {
        $this->habitat = $habitat;
    }
    public function getHabitat() {
        return $this-> habitat;
    }

     public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    public function getSexo() {
        return $this-> sexo;
    }

     public function setAlimentacao($alimentacao) {
        $this->alimentacao = $alimentacao;
    }
    public function getAlimentacao() {
        return $this-> alimentacao;
    }

}

class Cachorro extends Animais {
    private $raca;

    public function __construct($especie, $habitat, $sexo, $alimentacao, $raca) {
        parent::__construct($especie, $habitat, $sexo, $alimentacao);

        $this-> setRaca($raca);
  } 

 public function setRaca($raca) {
        $this->raca = $raca;
    }
    public function getRaca() {
        return $this-> raca;
    }
}

class Passaros extends Animais {
    private $cor;

    public function __construct($especie, $habitat, $sexo, $alimentacao, $cor) {
        parent::__construct($especie, $habitat, $sexo, $alimentacao);

        $this->cor = $cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }
    public function getCor() {
        return $this-> cor;
    }
}

class Macaco extends Animais{
    private $tempo_vida;
    private $tempo_dormindo;
    private $qtde_bananas_dia;

    public function __construct($especie, $habitat, $sexo, $alimentacao,  $tempo_dormindo, $qtde_bananas_dia) {
        parent::__construct($especie, $habitat, $sexo, $alimentacao);

        $this->qtde_bananas_dia = $qtde_bananas_dia;
        $this->tempo_dormindo = $tempo_dormindo;
    }
}

class Gato extends Animais {
    private $tipo_ronronamento;

    public function __construct($especie, $habitat, $sexo, $alimentacao, $tipo_ronronamento) {
        parent::__construct($especie, $habitat, $sexo, $alimentacao);

        $this->tipo_ronronamento = $tipo_ronronamento;
    }
}


?>