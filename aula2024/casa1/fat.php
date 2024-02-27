<?php
// Crie um script fat.php que contenha uma função que calcula o fatorial de um número inteiro.
// Faça um laço de repetição que imprima os números de 1 a 30 com seus respectivos fatoriais.

function fatorial($num) {
    if($num <= 1) {
        return 1;
    } else {
        return $num * fatorial($num - 1);
    }
}


function calculaFatorial($numero) { // 4
    $resultado = 1;
    $i = 2;

    while($i <= $numero) {
        $resultado = $resultado * $i; // 2 - 3 - 4
        ++$i; // 3 - 4 - 5
    }

    return $resultado;

}


function funcaoFatorial($n) {
    $resultado = 1;
    for ($i = 2; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}


// Imprimir o fatorial de 1 a 30
for ($i = 1; $i <= 30; $i++) {
    echo "Fatorial de $i: " . fatorial($i) . "\n";
}

echo fatorial(3), PHP_EOL;
echo calculaFatorial(3), PHP_EOL;
echo funcaoFatorial(3);


?>