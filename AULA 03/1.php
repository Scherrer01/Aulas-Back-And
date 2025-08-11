<?php
    echo "Menu:\n";
    echo "1 - Olá\n";
    echo "2 - Data Atual\n";
    echo "3 - Sair\n";
    
    // Obtém a escolha do usuário
    $opcao = readline("Escolha uma opção: ");
    
    // Processa a escolha
    switch ($opcao) {
        case 1:
            echo "Olá! Bem-vindo ao programa.";
            break;
            
        case 2:
            echo "Data atual:  11/08/25";
            break;
        case 3:
            echo "Saindo do programa...";
            exit();  // Termina o programa imediatamente
            
        default:
            echo "Opção inválida! Tente novamente.";
    }
?>