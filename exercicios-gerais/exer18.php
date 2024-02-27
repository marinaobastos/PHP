<?php
// 6) Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente 
// em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".

function ordemCrescente($array) {

    sort($array);

    foreach($array as $valor) {
        echo "$valor - ";
    }
}

$array = [];

$array[0] = readline('Num 1: ');
$array[1] = readline('Num 2: ');
$array[2] = readline('Num 3: ');
$array[3] = readline('Num 4: ');
$array[4] = readline('Num 5: ');

echo "Valores em ordem crescente: \n";
ordemCrescente($array);



/*
function ordemCrescente($a) {
    $a = [];

    for($i = 0; $i <= count($a); ++$i) {
        if($a[$i] < $a[$i - 1]) {
            echo $a[$i];
        } else {
            echo $a[$i - 1];
        }
    }
}

$a = [];
$a[0] = readline("Número: ");
$a[1] = readline("Número: ");
$a[2] = readline("Número: ");

ordemCrescente($a);
*/

?>