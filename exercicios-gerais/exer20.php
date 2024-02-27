<?php
// 8) Crie um algoritmo para calcular a média final de um aluno, para isso, solicite 
// a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso 
// a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. 
// Exiba também a média final calculada.

function media($notas) {
    $mediaAluno = array_sum($notas) / count($notas);
    echo $mediaAluno;
}

$notas = [];

$notas[0] = readline('Nota 1: ');
$notas[1] = readline('Nota 2: ');
$notas[2] = readline('Nota 3: ');

echo 'A média do aluno é: ';
media($notas);


?>