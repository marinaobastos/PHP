<?php
// Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). 
// Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números. 

const OPCAO_SOMA = 1;
const OPCAO_SUBTRACAO = 2;
const OPCAO_MULTIPLICACAO = 3;
const OPCAO_DIVISAO = 4;
const OPCAO_SAIR = 5;

// MENU DE EXIBIÇÃO
function menu() {
    echo <<<MENU

        1) Soma.
        2) Subtração.
        3) Multiplicação.
        4) Divisão.
        5) Sair.

    MENU;

    echo "\n";
    $escolha = readline('Escolha a operação: ');
    return (int)$escolha;
}


do {
    $operacao = menu();

    switch($operacao) {
        case OPCAO_SOMA: 
            $num1 = readline('Primeiro número: ');
            $num2 = readline('Segundo número: ');
            echo 'Resultado: ' . $num1 + $num2, PHP_EOL;
            break;
        case OPCAO_SUBTRACAO:
            $num1 = readline('Primeiro número: ');
            $num2 = readline('Segundo número: ');
            echo 'Resultado: ' . $num1 - $num2, PHP_EOL;
            break;
        case OPCAO_MULTIPLICACAO:
            $num1 = readline('Primeiro número: ');
            $num2 = readline('Segundo número: ');
            echo 'Resultado: ' . $num1 * $num2, PHP_EOL;
            break;
        case OPCAO_DIVISAO:
            $num1 = readline('Primeiro número: ');
            $num2 = readline('Segundo número: ');
            echo 'Resultado: ' . $num1 / $num2, PHP_EOL;
            break;

    }


} while($operacao != OPCAO_SAIR)

?>