<?php
// Crie um programa que leia uma data no formato "dd/mm/aaaa" e imprima a data com o mês por extenso. Por exemplo,
// "23/09/2022" deve ser impresso como "23 de setembro de 2022"
// Desafio: Faça a obtenção do mês por extenso sem utilizar if ou switch

$data = readline('Informe a data: ');
list($dia, $mes, $ano) = explode('/', $data);

$meses = [
    1 => 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
    'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
];

echo $dia . ' de ' . $meses[ (int) $mes] . ' de ' . $ano . '.';

?>