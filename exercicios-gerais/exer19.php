<?php
// 7) Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que 
// o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.

$a = readline('Digite A: ');
$b = readline('Digite B: ');

if($a > $b)
    echo 'A é maior que B.';
else 
    echo 'A é menor que B.';

?>