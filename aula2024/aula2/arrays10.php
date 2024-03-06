<?php
// Criando variáveis como arrays

$data = '27/08/2015';

list($dia, $mes, $ano) = explode('/', $data);

var_dump($dia, $mes, $ano);

echo "\n$dia - $mes - $ano";
?>