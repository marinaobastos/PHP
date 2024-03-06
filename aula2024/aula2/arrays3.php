<?php
// Percorrendo os elemntos de um array "misturado"

$a = [
    10 => 'Excelente',
    'PI' => 3.1415,
    11 => ['Hello' => 'World'],
    'f' => function($x, $y) {
        return $x + $y;
    }

];

foreach($a as $chave => $valor) {
    echo $chave . ' = ', PHP_EOL;
    var_dump($valor);
}

?>