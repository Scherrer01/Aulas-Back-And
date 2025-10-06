<?
class Heroi {
    private $nomeHeroi;
    private $poder;
    
    public function __construct($nomeHeroi, $poder, $comida, $ambiente){
        $this->nomeHeroi = $nomeHeroi;
        $this->poder = $poder;
    }

  public function setnomeHeroi($nomeHeroi) {
    $this->nomeHeroi = ucwords (strtolower
    ($nomeHeroi));
}

public function getnomeHeroi() {
    return $this->nomeHeroi;
}

 public function setpoder($poder) {
    $this->poder = ucwords (strtolower
    ($poder));
}

public function getpoder() {
    return $this->poder;
}

public function poder() {
    return ("O $this->nomeHeroi tem o poder $this->poder");
 }

}
//=======================================================================================
class Missao {
    private $tipoMissao;
    private $localMissao;
    
    public function __construct($tipoMissao, $localMissao, $comida, $ambiente){
        $this->tipoMissao = $tipoMissao;
        $this->localMissao = $localMissao;
    }

  public function settipoMissao($tipoMissao) {
    $this->tipoMissao = ucwords (strtolower
    ($tipoMissao));
}

public function gettipoMissao() {
    return $this->tipoMissao;
}

 public function setlocalMissao($localMissao) {
    $this->localMissao = ucwords (strtolower
    ($localMissao));
}

public function getlocalMissao() {
    return $this->localMissao;
 }

 public function Missao() {
    return ("A missão de $this->tipoMissao será no(a) $this->localMissao ");
 }
}
//==================================================================
class LocalDeTreinamento {
    private $nomeLocal;
    private $tipoTreino;
    
    public function __construct($nomeLocal, $tipoTreino, $comida, $ambiente){
        $this->nomeLocal = $nomeLocal;
        $this->tipoTreino = $tipoTreino;
    }

  public function setnomeLocal($nomeLocal) {
    $this->nomeLocal = ucwords (strtolower
    ($nomeLocal));
}

public function getnomeLocal() {
    return $this->nomeLocal;
}

 public function setTipoTreino($tipoTreino) {
    $this->tipoTreino = ucwords (strtolower
    ($tipoTreino));
}

public function getTipoTreino() {
    return $this->tipoTreino;
}

public function Treino() {
    return ("O $this->tipoTreino será no  $this->nomeLocal");
}

}



?>

Heroi - Missao = composição -> O Herói precisa de missões para ser um heróis
Heroi - Treinamento = composição -> O herói precisa treinar para ser um herói