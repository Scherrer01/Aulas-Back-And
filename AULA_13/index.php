<?


require_once "CRUD.php";
require_once "DAO.php";

$dao = new AlunoDAO(); //Objeto da classe Aluno DAO para testar métodos CRUD

//Create
$dao -> criarAlunos(new Aluno(1, "Josias", "Panficação"));
$dao -> criarAlunos(new Aluno (2,"Hugo", "Manicure"));
$dao -> criarAlunos(new Aluno(3, "Beatriz", "Elétrica"));

//Read
echo "Listagem Inicial: \n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
}
//Update
$dao->atualizarAlunos(1, "Jozias", "Borracharia");
echo "\n Após a Atualização: \n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
}

//Delete
$dao->excluirAlunos(1); //Excluindo objeto $aluno2 --> id=1
echo "\n Após exclusão: \n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "{$aluno->getID()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
}
?>