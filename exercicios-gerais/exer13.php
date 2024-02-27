<?php
// 13 - Funções anônimas

$soma = function($x, $y) {
    return $x+$y;
};

$z = $soma;
echo $z(10, 34);

?>