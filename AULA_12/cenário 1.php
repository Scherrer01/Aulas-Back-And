<?
class Turista {
    private $nome;
    private $local;
    private $comida;
    private $ambiente;
    
    public function __construct($nome, $local, $comida, $ambiente){
        $this->nome = $nome;
        $this->local = $local;
        $this->comida = $comida;
        $this->ambiente = $ambiente;
    }

  public function setNome($nome) {
    $this->nome = ucwords (strtolower
    ($nome));
}

public function getNome() {
    return $this->nome;
}

 public function setLocal($local) {
    $this->local = ucwords (strtolower
    ($local));
}

public function getLocal() {
    return $this->local;
}
 public function setComida($comida) {
    $this->comida = ucwords (strtolower
    ($comida));
}

public function getComida() {
    return $this->comida;
}

 public function setambiente($ambiente) {
    $this->ambiente = ucwords (strtolower
    ($ambiente));
}

public function getambiente() {
    return $this->ambiente;
 }

 public function visitar() {
    return ("O $this->nome está viajando para o $this->local");
 }

  public function comer() {
    return ("O $this->nome está comendo $this->comida");
 }
  public function nadar() {
    return ("O $this->nome está nadando no $this->ambiente");
 }
}
// ===================================================

class Localidade {
    private $atividade;
    private $pais;
    private $nomeLocal;

    public function __construct($atividade, $pais, $nomeLocal){
        $this->atividade = $atividade;
        $this->pais = $pais;
        $this->nomeLocal = $nomeLocal;
    }

public function setaAividade($atividade) {
    $this->atividade = ucwords (strtolower
    ($atividade));
}

public function getAtividade() {
    return $this->atividade;
}

public function setPais($pais) {
    $this->pais = ucwords (strtolower
    ($pais));
}

public function getPais() {
    return $this->pais;
}

public function setNomeLocal($nomeLocal) {
    $this->nomeLocal = ucwords (strtolower
    ($nomeLocal));
}

public function getNomeLocal() {
    return $this->nomeLocal;
 }

  public function visitar() {
    return ("O $this->nomeLocal tem $this->atividade para fazer");
 }
}
//=========================================================

interface Atividade {
    public function executar($nomeAtividade, $acao);
}
//==========================================================
class Comida {
    private $nomeComida;
    private $ingredientes;
    private $paladar;

    
public function __construct($nomeComida, $ingredientes, $paladar){
        $this->nomeComida = $nomeComida;
        $this->ingredientes = $ingredientes;
        $this->paladar = $paladar;
    }

    public function setNomeComida($nomeComida) {
    $this->nomeComida = ucwords (strtolower
    ($nomeComida));
}

public function getNomeComida() {
    return $this->nomeComida;
 }

 public function setIngredientes($ingredientes) {
    $this->ingredientes = ucwords (strtolower
    ($ingredientes));
}

public function getIngredientes() {
    return $this->ingredientes;
 }

 public function setPaladar($paladar) {
    $this->paladar = ucwords (strtolower
    ($paladar));
}

public function getPaladar() {
    return $this->paladar;
 }

 public function descricao() {
    return ("O $this->nomeComida é feito com $this->ingredientes e é $this->paladar");
 }

}
//=============================================================
class CorpoDagua {
    private $nomeAgua;
    private $tipo;
    public function __construct($nomeAgua, $tipo){
        $this->nomeAgua = $nomeAgua;
        $this->tipo = $tipo;
    }
    
    public function setNomeAgua($nomeAgua) {
    $this->nomeAgua = ucwords (strtolower
    ($nomeAgua));
}

public function getNomeAgua() {
    return $this->nomeAgua;
 }

 public function settipo($tipo) {
    $this->tipo = ucwords (strtolower
    ($tipo));
}

public function gettipo() {
    return $this->tipo;
 }

  public function Agua() {
    return ("O $this->nomeAgua é $this->tipo");
 }

}


?>


Turista - localidad = associação -> Turista interage com Localidade
localidade - atividade = agregação-> Localidade oferece atividades, mas não as contém totalmente
Turista - Comida = associação -> Turista come a comida
Turista - CorpoDagua = associação -> Turista nada no corpo de agua