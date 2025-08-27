<?php

class Pessoa {
    private $nome;
    private $cpf;
    private $telefone;
    private $idade;
    private $email;
    private $senha;


    public function __construct ($nome, $cpf, $telefone, $idade, $email, $senha) {
    $this-> setNome($nome);
    $this-> setCpf($cpf);
    $this-> setTelefone($telefone);
    $this-> setIdade($idade);
    $this-> email = $email;
    $this-> senha = $senha;
}

public function setNome($nome) {
    $this->nome = ucwords (strtolower
    ($nome));
}

public function getNome() {
    return $this->nome;
}

public function setCpf($cpf) {
    $this->cpf = preg_replace('/\D/', '',
    $cpf);
}

public function getCpf() {
    return $this->cpf;
}

public function setTelefone($telefone) {
    $this->telefone = preg_replace('/\D/', '',
    $telefone);
}

public function getTelefone() {
    return $this->telefone;
}

public function setIdade($idade) {
    $this->idade = abs ((int)$idade);
}
 public function getIdade(){
    return $this->idade;
 }

public function exibirInfo() {
    return "Nome do aluno $this->nome/n CPF: $this->cpf/n
    Telefone: $this->telefone/n Idade: $this->idade/n Email: $this->email/n
    Senha: $this->senha";
}


}

$aluno1 = new Pessoa ("ScHeRrEr", "240.040.938-21",
 "(19)9870-34392", 20, "diogo.scherrer@gmail.com",
  "diogo123");



  echo $aluno1->exibirInfo();

?>