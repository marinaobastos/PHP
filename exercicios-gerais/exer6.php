<?php
// 4 - Faça um script que peça 3 notas de um aluno e mostra sua média.

$array = [];

echo 'Digite as 3 notas'."\n";

$array[0] = readline('Nota 1: ');
$array[1] = readline('Nota 2: ');
$array[2] = readline('Nota 3: ');

echo 'A média é ' . (array_sum($array))/3 . '.';

?> 