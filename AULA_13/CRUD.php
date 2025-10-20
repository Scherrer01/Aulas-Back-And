<?
Class Aluno {
    private $id;
    private $nome;
    private $curso;

    public function __construct($id, $nome, $curso) {
        $this->id = $id;
        $this->nome = $nome;
        $this->curso = $curso;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->curso = $curso;

        return $this;
    }
   
    public function getNome(){
        return $this->nome;
    }
   
    public function setNome($nome){
        $this->nome = $nome;

        return $this;
    }

    public function getId(){
        return $this->id;
    }


    public function setId($id){
        $this->id = $id;

        return $this;
    }

   
}


?>