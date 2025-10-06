Cenário 5 – Analise o problema com linguagem natural
"Um sistema de biblioteca deve permitir que usuários (alunos e professores)
façam empréstimos de livros e revistas."

substantivos: sistema, biblioteca, usuários, alunos, prefessores, empréstimos, livros, revistas
métodos: deve, permitir, façam

Usuario: fazerEmprestimo, devolverItem, consultarItens
Livro: reservar, liberar, getDisponibilidade
Emprestimo: registrarEmprestimo, calcularDataDevolucao


<?php

class Usuario {
    private $nome;
    private $tipo;
    
    public function __construct($nome, $tipo){
        $this->nome = $nome;
        $this->tipo = $tipo;
    }

    public function setnome($nome) {
        $this->nome = ucwords(strtolower($nome));
    }

    public function getnome() {
        return $this->nome;
    }

    public function settipo($tipo) {
        $this->tipo = ucwords(strtolower($tipo));
    }

    public function gettipo() {
        return $this->tipo;
    }

    public function solicitarEmprestimo() {
        return ("O(A) $this->tipo $this->nome pode solicitar empréstimo");
    }

    public function devolverItem() {
        return ("O(A) $this->tipo $this->nome pode devolver item");
    }
}

class ItemBibliotecario {
    private $codigo;
    private $titulo;
    private $tipo;
    
    public function __construct($codigo, $titulo, $tipo){
        $this->codigo = $codigo;
        $this->titulo = $titulo;
        $this->tipo = $tipo;
    }

    public function setcodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getcodigo() {
        return $this->codigo;
    }

    public function settitulo($titulo) {
        $this->titulo = ucwords(strtolower($titulo));
    }

    public function gettitulo() {
        return $this->titulo;
    }

    public function settipo($tipo) {
        $this->tipo = ucwords(strtolower($tipo));
    }

    public function gettipo() {
        return $this->tipo;
    }

    public function emprestar() {
        return ("O $this->tipo $this->titulo pode ser emprestado");
    }

    public function devolver() {
        return ("O $this->tipo $this->titulo pode ser devolvido");
    }
}

class Emprestimo {

    private $usuario;
    private $item;
    private $data;
    
    public function __construct($usuario, $item, $data){
        $this->usuario = $usuario;
        $this->item = $item;
        $this->data = $data;
    }

    public function setusuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getusuario() {
        return $this->usuario;
    }

    public function setitem($item) {
        $this->item = $item;
    }

    public function getitem() {
        return $this->item;
    }

    public function setdata($data) {
        $this->data = $data;
    }

    public function getdata() {
        return $this->data;
    }

    public function finalizar() {
        return ("O empréstimo do item $this->item para $this->usuario pode ser finalizado");
    }
}

class SistemaDeBiblioteca {
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

    public function registrarEmprestimo() {
        return ("O sistema $this->nome pode registrar empréstimo");
    }

    public function registrarDevolucao() {
        return ("O sistema $this->nome pode registrar devolução");
    }
}



?>