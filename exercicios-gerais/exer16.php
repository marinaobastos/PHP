<?php
// 2) Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo 
// com o número solicitado, ex: Entrada = 4 . Saída = 4 X 0 = 0...4 X 10 = 40.

function tabuada($num) {

    $i = 0;
    while($i <= 10) {
        echo "$num x $i = " . $num*$i . PHP_EOL;
        ++$i;

    }
}

$num = readline('Digite um numero: ');
tabuada($num);

/*
// MENU DE EXIBIÇÃO
function menu() {
    echo <<<MENU

        --- TABUADA ---

    MENU;

    echo "\n";
    $num = readline('Digite um número: ');
}


do {
    $escolha1 = menu();

} while($escolha1 != 'a');
*/

?>