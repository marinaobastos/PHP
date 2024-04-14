<?php
// Crie uma função cubo que retorne o cubo de um número. Aplique essa função no array a seguir e 
// imprima os valores calculados: array( 1, 2, 3, 4, 5 )

function cubo($num) {
    
    return $num * $num * $num;
}

$a = [1, 2, 3, 4, 5];

$cuboDeCadaNumero = [];
foreach($a as $numero) {
    $cuboDeCadaNumero = cubo($numero);
    $resultados[] = $cuboDeCadaNumero;
}

print_r($resultados);

?>