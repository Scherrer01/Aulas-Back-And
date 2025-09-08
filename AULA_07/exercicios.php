<?
//Exercicio 1
 class Carros {
    private $marca;
    private $modelo;
 

    public function __construct($marca, $modelo) {
    $this-> setMarca($marca);
    $this-> setModelo($modelo);
    }

public function setMarca($marca) {
    $this->marca = ucwords (strtolower
    ($marca));
}
public function getMarca() {
    return $this->marca;
}

public function setModelo($modelo) {
    $this->modelo = ucwords (strtolower
    ($modelo));
}
public function getModelo() {
    return $this->modelo;
}

public function exibirInfo() {
    return 
   "Marca: $this->marca 
    Modelo: $this->modelo";
}
 }
$carro1 = new Carros("BMW", "M4");

echo $carro1-> exibirInfo();


 
?>











<?
//Exercicio 2
class Pessoa {
    private $nome;
    private $idade;
    private $email;

    public function __construct($nome,$idade,$email) {
        $this-> setNome($nome);
        $this-> setIdade($idade);
        $this-> setEmail($email);
    }

public function setNome($nome) {
    $this->nome = ucwords (strtolower ($nome));
}
    public function getNome() {
        return $this->nome;
    }

public function setIdade($idade) {
    $this->idade = abs ((int)($idade));
}
    public function getIdade() {
        return $this->idade;
    }

    public function setEmail($email) {
    $this->email = ucwords (strtolower ($email));
}
    public function getEmail() {
        return $this->email;
    }

public function exibirInfo() {
    return 
   "Nome: $this->nome 
    Idade: $this->idade 
    Email: $this->email";
    }
}
$pessoa1 = new Pessoa ("Scherrer", 20, "diogo.scherrer@gmail.com");

echo $pessoa1-> exibirInfo();


?>







<?
//Exercicio 3
class Alunos {
    private $name;
    private $nota;

    public function __construct($name, $nota) {
        $this-> setName($name);
        $this-> setNota($nota);
    }

public function setName($name) {
$this->name = ucwords (strtolower ($name));
}

public function getName () {
    return $this-> name;
}

public function setNota($nota) {
    if (is_numeric($nota) >= 0 && $nota <= 10) {
        $this->nota = $nota;
    } else {
        $this->nota = 0;
    }
}
public function getNota () {
    return $this-> nota;
}

public function showInfo() {
    return
    "aluno $this->name
    tirou nota $this->nota";
   }   
}

$aluno1 = new Alunos("Diogo", 11);
echo $aluno1-> showInfo();
?>







<?
//exercicio 4
class Produtos {
    private $produto;
    private $preco;
    private $quantidade;

    public function __construct ($produto, $preco, $quantidade) {
        $this-> setProduto($produto);
        $this-> setPreco($preco);
        $this->setQuantidade($quantidade);
    }

public function setProduto($produto) {
    $this->produto = ucwords(strtolower($produto));
} 
 public function getProduto() {
    return $this-> produto;
 }

 public function setPreco($preco) {
    $this->preco = abs((float)($preco));
} 
 public function getPreco() {
    return $this-> preco;
 }

 public function setQuantidade($quantidade) {
    $this->quantidade = abs((int)($quantidade));
} 
 public function getQuantidade() {
    return $this-> quantidade;
 }

public function exibirInfo() {
    return "
    Produto: $this->produto
    custa: $this->preco$ 
    e tem $this->quantidade no estoque";

}
}
$produto1 = new Produtos("celular", 1500, 50);

echo $produto1 ->exibirInfo();

?>







<?
//exercicio 5
class Empresa {
    private $funcionario;
    private $salario;

    public function __construct($funcionario, $salario) {
        $this-> setFuncionario($funcionario);
        $this-> setSalario($salario);
    }

    public function setFuncionario($funcionario) {
        $this->funcionario = ucwords(strtolower($funcionario));
    }

    public function getFuncionario() {
        return $this->funcionario;
    }

  public function setSalario($salario) {
        $this->salario = abs((float)($salario));
    }

    public function getSalario() {
        return $this->salario;
    }


    public function showInfo() {
        return "
        o Funcionario $this->funcionario 
        recebe $this->salario R$ de salario";
    }
}

$trabalhador1 = new Empresa("Pedro", 1980.45);

echo $trabalhador1 -> showInfo();

?>