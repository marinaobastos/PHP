<?php
// 4 - Faça um script que peça 3 notas de um aluno e mostra sua média.

echo 'Digite as 3 notas'."\n";

$num1 = readline('Nota 1: ');
$num2 = readline('Nota 2: ');
$num3 = readline('Nota 3: ');

echo 'A média é ' . $media = ($num1 + $num2 + $num3)/3 . '.';
?> 