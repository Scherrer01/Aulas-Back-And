<?

class AlunoDAO { //Classe DAO(Data access object) para manipulação das funções do CRUD (creat, read, update e delete)

    private $alunos = []; //Array $alunos para armazenamento dos objetos a serem manipulados, antes de ser enviado ao banco de dados. Foi criado vazio inicialmente
    public function criarAlunos(Aluno $aluno) { //Método para criarum objeto no Array alunos --> Create
           $this->alunos [$aluno->getId() +1] = $aluno;
    }

    public function lerAlunos() { //Método para ler os dados de um aluno já criado --> Read
           return $this->alunos;
    }

    public function atualizarAlunos($id, $novoNome, $novoCurso) { //Método para atualizar os dados de um aluno já criado --> Update
        if(isset($this->alunos[$id +1])) {
            $this->alunos[$id +1]->setNome($novoNome);
            $this->alunos[$id +1]->setCurso($novoCurso);
        }
    }

    public function excluirAlunos($id) { //Método para excluir os dados de um aluno já criado --> Delete
           unset($this->alunos[$id +1]);
    }

}




?>