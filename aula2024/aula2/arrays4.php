<?php
// Aplicando funções em arrays

// Calcula o dobro de cada elemento do array
function dobro($x) {
    return $x + $x;
}

$a = [100, 200, 300];
var_dump($a) . PHP_EOL;

$resultado = array_map('dobro', $a); // passamos o nome da função entre apóstrofos
var_dump($resultado);

?>