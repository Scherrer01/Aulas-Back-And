Cenário 6 – Leia o enunciado do problema
"Um sistema de cinema deve permitir que clientes comprem ingressos para
sessões de filmes."

substantivos: sistema, cinema, clientes, ingressos, filmes
métodos: deve, permitir, comprem

Cliente: comprarIngresso, selecionarFilme
Ingresso: gerarIngresso, validarIngresso
Filme: getTitulo, getDuracao, getClassificacao

<?php

class Cliente {
    private $nome;
    private $email;
    
    public function __construct($nome, $email){
        $this->nome = $nome;
        $this->email = $email;
    }

    public function setnome($nome) {
        $this->nome = ucwords(strtolower($nome));
    }

    public function getnome() {
        return $this->nome;
    }

    public function setemail($email) {
        $this->email = strtolower($email);
    }

    public function getemail() {
        return $this->email;
    }

    public function comprarIngresso() {
        return ("O cliente $this->nome pode comprar ingresso");
    }
}

class Sessao {
    private $filme;
    private $horario;
    private $sala;
    
    public function __construct($filme, $horario, $sala){
        $this->filme = $filme;
        $this->horario = $horario;
        $this->sala = $sala;
    }

    public function setfilme($filme) {
        $this->filme = ucwords(strtolower($filme));
    }

    public function getfilme() {
        return $this->filme;
    }

    public function sethorario($horario) {
        $this->horario = $horario;
    }

    public function gethorario() {
        return $this->horario;
    }

    public function setsala($sala) {
        $this->sala = $sala;
    }

    public function getsala() {
        return $this->sala;
    }

    public function exibirFilme() {
        return ("A sessão do filme $this->filme será exibida na sala $this->sala às $this->horario");
    }
}

class Ingresso {
    private $cliente;
    private $sessao;
    private $tipo;
    private $valor;
    
    public function __construct($cliente, $sessao, $tipo, $valor){
        $this->cliente = $cliente;
        $this->sessao = $sessao;
        $this->tipo = $tipo;
        $this->valor = $valor;
    }
    public function setcliente($cliente) {
        $this->cliente = $cliente;
    }

    public function getcliente() {
        return $this->cliente;
    }

    public function setsessao($sessao) {
        $this->sessao = $sessao;
    }

    public function getsessao() {
        return $this->sessao;
    }

    public function settipo($tipo) {
        $this->tipo = ucwords(strtolower($tipo));
    }

    public function gettipo() {
        return $this->tipo;
    }

    public function setvalor($valor) {
        $this->valor = $valor;
    }

    public function getvalor() {
        return $this->valor;
    }

    public function validar() {
        return ("O ingresso do tipo $this->tipo para o filme $this->sessao pode ser validado");
    }
}

class SistemaDeCinema {
    private $nome;
    private $local;
    
    public function __construct($nome, $local){
        $this->nome = $nome;
        $this->local = $local;
    }

    public function setnome($nome) {
        $this->nome = ucwords(strtolower($nome));
    }

    public function getnome() {
        return $this->nome;
    }

    public function setlocal($local) {
        $this->local = ucwords(strtolower($local));
    }

    public function getlocal() {
        return $this->local;
    }

    public function venderIngresso() {
        return ("O sistema $this->nome pode vender ingresso");
    }

    public function gerarRelatorio() {
        return ("O sistema $this->nome pode gerar relatório de vendas");
    }
}



?>