<?php
// Criando variáveis como arrays
$data = '24/09/2001';

list($dia, $mes, $ano) = sscanf($data, '%d/%d/%d');

var_dump($dia, $mes, $ano);

?>