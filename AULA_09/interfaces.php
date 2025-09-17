<? 
// Modificadores de acesso:
// Existem 3 tipos: Public, Private e Protected
// Public NomeDoAtributo: métodos e atributos públcos

// Private NomeDoAtributo: Métodos e atributos privados para o acesso somente dentro da class. Utilizamos os getters e setters para acessa-los 

// Protected NomeDoAtributo: métodos e atributos protegidos para acesso somente das classes e de suas classes filhas.

// Pacotes (package): Sintaxe logo no inicio do código, que atribui de onde os arquivos pertencem, ou seja, o caminho da pasta em que ele está contido. Exemplo:
// -- namespace AULA 09;

// Caso tenham mais aqruivos que formam o BackEnd de uma página WEB e possuem a mesma raiz, o NameSpace será o mesmo.

namespace AULA_09;

// Interfaces: É um recurso no qual garante que obrigatoriamente a classe tenho que construir algum metodo previamente determinado. Funciona como uma promessa ou contrato. 
// Exemplo: Configuramos uma interface "pagamento" que faz com que qualquer classe que a implremente, tenha que obrigatoriamente contruir o metodo "pagar"

interface Pagamento { //Interface de contrato de pagamento

    public function pagar($valor);
}

class CartaoDeCredito implements Pagamento { 
    public function pagar($valor) {
        echo"Pagamento realziado com cartão de crédito, valor: $valor\n" ;
    }
}

class PIX implements Pagamento {
    public function pagar($valor) {
        $valor -= $valor * 0.1;
        echo"Pagamento realziado via pix com 10% de desconto, valor: $valor\n";
    }
}

class DinheiroEspecie implements Pagamento {
    public function pagar($valor) {
        $valor -= $valor * 0.1;
        echo"Pagamento realziado em dinheiro, desconto de 10% aplicado, valor: $valor\n";
    }
}

$cred = new CartaoDeCredito();
$cred->pagar(250);

$pix = new PIX();
$pix->pagar(380);

$dinheiro = new DinheiroEspecie();
$dinheiro->pagar(370);







echo "\n\nExercicio1 -----------------------------------------\n";

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

$quadrado1 = new Quadrado();
$quadrado1->calcular(10, 0); 

$circulo1 = new Circulo();
$circulo1->calcular(5, 0);

echo "\n\nExercicio 2 ------------------------------------------------\n";

class Pentagono implements CalcArea {
    public function calcular($medida1, $medida2) {
        $medida1 = ($medida1 * $medida2)/2; //medida1 é o perimetro e medida12 a apótema
        echo "A área do pentagono é: $medida1\n";
    }
}

$pentagono1 = new Pentagono();
$pentagono1->calcular(10, 5);

class Hexagono implements CalcArea {
    public function calcular($medida1, $medida2) {
        $medida1 = (3 * sqrt(3) * pow($medida1, 2)) / 2; 
         echo "A área do hexagono é: $medida1 ao quadrado\n";
    }
}

$hexagono1 = new Hexagono();
$hexagono1->calcular(10, 0);

echo"\n\n\nExercicio 3 -----------------------\n";

?>




