<?php
// 9 - Faça um script que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. 
// Calcule e mostre o total do seu salário no referido mês.

$ganhaPorHora = readline('Quando ganha por hora: ');
$horasTrabalhadas = readline('Horas trabalhadas: ');

function totalSalario ($ganhaPorHora, $horasTrabalhadas) {
    return $ganhaPorHora * $horasTrabalhadas;
}

echo "O salário total é " . totalSalario($ganhaPorHora, $horasTrabalhadas);

?>