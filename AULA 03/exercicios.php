<?
/*Exercicio 1*/
$idade = readline ("Digite sua idade: ");

if ($idade >= 18) {
echo "Maior de idade";
} else 
echo "Menor de idade";
?>

<?
$nota1 = readline("Sua primeira nota: ");
$nota2 = readline("Sua segunda nota: ");
$media = ($nota1 + $nota2) /2;

if ($media >= 9) {
    echo "Sua nota $nota é Excelente";
} elseif ($media >=7) {
    echo "Sua nota$nota é boa";
}
  else {
    echo "Reprovado";
  }
?>

<?
$dia = readline("Qual o dia em número? ");

switch ($dia) {
    case 1;
     echo "Domingo";
      break;
    case 2;
     echo "Segunda";
      break;
    case 3;
     echo "Terça";
      break;
    case 4;
     echo "Quarta";
      break;
    case 5;
     echo "Quinta";
      break;
    case 6;
     echo "Sextou!";
      break;
    case 7;
     echo "Sabadou!!";
      break;
    default:
     echo "Dia não reconhecido";
}
?>

<?
$num1 = readline ("Digite um número: ");
$num2 = readline ("Digite outro número: ");
$condicao = readline ("Digite a operação desejada: ");

switch ($condicao) {
    case "adição";
     echo "A soma de $num1 + $num2 é: ". ($num1 + $num2);
      break;
    case "subtração";
     echo "A subtração de $num1 + $num2 é: " . ($num1 - $num2);
      break;
    case "multiplicação";
     echo "A multiplicação de $num1 * $num2 é: " . ($num1 * $num2);
      break;
    case "divisão";
     echo "A divisão de $num1 / $num2 é: " . ($num1 / $num2);
      break;
    default:
     echo "Erro";
}   
?>

<?
for ($i = 1; $i <= 10; $i++) {
    echo "Número: $i";  
}
?>

<?
for ($i = 10; $i >= 0; $i--) {
    echo "Número: $i";  
}
?>

<?php
$numeroFinal = readline("Escolha um número: ");
for ($i = 0; $i <= $numeroFinal; $i += 2) {
    echo "$i ";
}
?>

<?php
$numero = (int)readline("Digite um número para ver sua tabuada: ");

echo "Tabuada do $numero:\n";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
}
?>

<?
$temp = readline ("Defina a temperatura em graus: ");
 
if ($temp <= 15) {
  echo "$temp ° está frio";
} elseif ($temp <= 25) {
  echo "$temp ° está agradável";
} else {
  echo "$temp ° está quente";
};

?>

<?php
for ($tentativas = 0; $tentativas < 5; $tentativas++) {
    // Exibe o menu
    echo "Menu:\n";
    echo "1 - Olá\n";
    echo "2 - Data Atual\n";
    echo "3 - Sair\n";
    
    // Obtém a escolha do usuário
    $opcao = (int)readline("Escolha uma opção: ");
    
    // Processa a escolha
    switch ($opcao) {
        case 1:
            echo "Olá! Bem-vindo ao programa.\n\n";
            break;
            
        case 2:
            echo "Data atual: " . date('d/m/Y H:i:s') . "\n\n";
            break;
            
        case 3:
            echo "Saindo do programa...\n";
            exit();  // Termina o programa imediatamente
            
        default:
            echo "Opção inválida! Tente novamente.\n\n";
    }
    
    // Se for a última tentativa, avisa o usuário
    if ($tentativas == 4) {
        echo "Número máximo de tentativas alcançado. Encerrando...\n";
    }
}
?>