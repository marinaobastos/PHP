<?php
/* Crie um programa que leia uma hora do console, no formato 24 horas, como "hh:mm", 
e informe se a hora lida é antes ou depois de meio dia (12). */


$leHora = readline('Informe as horas: ');

$partes = explode(':', $leHora);

if($partes[0] > 12)
    echo 'Depois do meio dia.';
else if($partes[0] < 12)
    echo('Antes de meio dia.');
else 
    echo('É meio dia.');

?>