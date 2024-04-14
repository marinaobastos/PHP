<?php
// Crie um script fat.php que contenha uma função que calcula o fatorial de um número inteiro. 
// Faça um laço de repetição que imprima os números de 1 a 30 com seus respectivos fatoriais.

// Função que calcula o fatorial
function fatorial($num) {

    if($num === 0 || $num === 1) {
        return 1;
    } else {
        return ($num * fatorial($num - 1));
    }
}

// Laço de repetição para imprimir os números de 1 a 30
for($i = 0; $i <= 30; ++$i) {
    echo "Fatorial de $i é " . fatorial($i) . PHP_EOL;
}

?>