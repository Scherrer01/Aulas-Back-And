<?
namespace AULA_10;

//Polimofismo
// O termo polimofismo significa "varias formas", 
// Assossiando isso a programação orientada a objetos, o
// conceito se trata de várias classes e suas instâncias
// (objetos) respondendo a um mesmo método de formas diferentes. No exemplo
// do interface do aula_9, temos um método CalcularArea() que responde de forma diferente a
// classe Quadrado, a classe Pentagono e a classe Circulo.
// Isso quer dizer que a função é a mesma - calcular a area de forma geométrica - mas 
// a operação muda de acordo com a figura

// Crie um método chamado Mover(), aonde ele responde de varias 
// formas diferentes, para as sub-classes: Carro,
// Avião, Barco e Elevador. Dica: Utilize interfaces.

interface Veiculo {
    public function mover();
}

class Carro implements Veiculo {
    public $nome;
    public function mover(){
    echo "O carro {$this->nome} está andando";
}
}

class Aviao implements Veiculo {
    public $nome;
    
    public function mover() {
        echo "O avião {$this->nome} está voando";
    }
}


//Crie 2 objetos para cada classe
$carro1 = new Carro();
$carro1->nome = "Civic";

$carro2 = new Carro();
$carro2->nome = "Jetta";
//=========================================
$aviao1 = new Aviao();
$aviao1->nome = "B2";

$aviao2 = new Aviao();
$aviao2->nome = "F-5";
//==========================================


//Exercicio 1
interface CalcArea {
    public function calcular($medida1, $medida2);
}

class Quadrado implements CalcArea {
    public function calcular($medida1, $a) {
        $medida1 = $medida1 * $medida1;
        echo "A área do quadrado é: $medida1\n";
    }
}

class Circulo implements CalcArea {
    public function calcular($medida1, $a) {
        $medida1 = pi() * pow($medida1, 2);
        echo "A área do circulo é: $medida1\n";
    }
}

class Retangulo implements CalcArea {
    public function calcular($medida1, $a) {
        $medida1= $medida1 * $a;
        echo "A área do circulo é: $medida1\n";
    }
}


$quadrado1 = new Quadrado();
$quadrado1->calcular(10, 0); 

$circulo1 = new Circulo();
$circulo1->calcular(5, 0);

$retangulo1 = new Circulo();
$retangulo1->calcular(7, 8);
//=====================================================

//exercicio 2
interface Animal {
    public function barulho();
}

class Cachorro implements Animal {
    public $barulho;
    public function barulho(){
    echo "O cachorro {$this->barulho}";
}
}

class Gato implements Animal {
    public $barulho;
    
    public function barulho() {
        echo "O Gato {$this->barulho}";
    }
}

class Vaca implements Animal {
    public $barulho;
    
    public function barulho() {
        echo "A vaca {$this->barulho}";
    }
}


//Crie 2 objetos para cada classe
$cachorro1 = new Carro();
$cachorro1->nome = "late";

$gato1 = new Carro();
$gato1->nome = "Mia";

$vaca1 = new Carro();
$vaca1->nome = "Muje";
//================================================

// Exercicio 3
//O de hoje
//================================================

// Exercicio 4
class Email {
    public function enviar() {
        return "Enviando email...";
    }
}

class Sms {
    public function enviar() {
        return "Enviando SMS...";
    }
}

function notificar($meio) {
    if (method_exists($meio, 'enviar')) {
        return $meio->enviar();
    } else {
        return "Método enviar() não encontrado!";
    }
}

$email = new Email();
$sms = new Sms();

echo notificar($email) . "\n"; 
echo notificar($sms) . "\n";   
//=========================================================

//exercicio 5
class Calculadora {
    
    public function somar() {
        $args = func_get_args(); 
        $num_args = func_num_args(); 
        
        if ($num_args == 2) {
            return $args[0] + $args[1];
        } elseif ($num_args == 3) {
            return $args[0] + $args[1] + $args[2];
        } else {
            return "Número de argumentos inválido! Use 2 ou 3 números.";
        }
    }
}

$calc = new Calculadora();

echo "Soma de 2 números: " . $calc->somar(5, 3) . "\n";          
echo "Soma de 3 números: " . $calc->somar(2, 4, 6) . "\n";        
echo "Soma de 1 número: " . $calc->somar(10) . "\n";              
//=================================================================================
?>