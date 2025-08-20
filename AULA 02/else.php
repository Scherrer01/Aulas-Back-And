<?php
$nota1 = readline ("digite a 1° nota: "); 
$nota2 = readline ("digite a 2° nota: "); 
$media = ($nota1 + $nota2) / 2; 

if ($media >= 7) {
    echo "Aluno com a nota $media aprovado";
} else {
    echo "Aluno com a nota $media reprovado";
}
?>

