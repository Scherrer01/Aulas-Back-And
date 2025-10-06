Cenário 3 – Fantasia e Destino
John Snow, Papai Smurf, Deadpool e Dexter estão em uma jornada. Durante o
caminho, começa a chover, e eles precisam amar uns aos outros para superar as
dificuldades. No fim da jornada, eles celebram ao comer juntos.

substantivos: Jhon Snow, Papai Smurf, Deadpool, Dexter, jornada, caminho, dificuldades, fim, jornada
Métodos: estão, chover, começa, precisam, amar, superar, celebram, comer

classes: Personagens
métodos: estar, chover, amar, comer

Personagem: amar, comer
Clima: chover, getIntensidade


<?
class Personagem {
    private $nomePersonagem;
    private $destino;
    
    public function __construct($nomePersonagem, $destino, $comida, $ambiente){
        $this->nomePersonagem = $nomePersonagem;
        $this->destino = $destino;
    }

  public function setnomePersonagem($nomePersonagem) {
    $this->nomePersonagem = ucwords (strtolower
    ($nomePersonagem));
}

public function getnomePersonagem() {
    return $this->nomePersonagem;
}

 public function setdestino($destino) {
    $this->destino = ucwords (strtolower
    ($destino));
}

public function getdestino() {
    return $this->destino;
}

public function Treino() {
    return ("O $this->nomePersonagem seguirá jonada para $this->destino");
}
}

class Jornada {
    private $localJornada;
    private $objetivo;
    
    public function __construct($localJornada, $objetivo, $comida, $ambiente){
        $this->localJornada = $localJornada;
        $this->objetivo = $objetivo;
    }

  public function setlocalJornada($localJornada) {
    $this->localJornada = ucwords (strtolower
    ($localJornada));
}

public function getlocalJornada() {
    return $this->localJornada;
}

 public function setobjetivo($objetivo) {
    $this->objetivo = ucwords (strtolower
    ($objetivo));
}

public function getobjetivo() {
    return $this->objetivo;
}

public function Treino() {
    return ("A jornada para $this->localJornada terá como objetivo $this->objetivo");
}

}

?>

Personagem - Jornada = agregação -> ambos existem, mas se agregam