<?php
// Crie uma função media que receba um array e retorne a média de seus valores. Gere um array 
// com 10 números aleatórios, usando a função rand do PHP, imprima os valores e então a média deles.

function mediaArray($array) {

    $soma = 0;

    foreach($array as $a) {
        $soma += $a;
    }

    $media = $soma/count($array);
    return $media;
}

$array = [];

for($i = 0; $i < 10; ++$i) {
    $array[$i] = rand(1, 30);
}

var_dump($array);

echo "\nA média do array é: " . mediaArray($array);

?>