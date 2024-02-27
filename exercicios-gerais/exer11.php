<?php
// 11 - Passagem de valor por referência.

function incrementarValor(&$num) {
    ++$num;
}

$x = readline('Digite um número para incrementar: ');

echo incrementarValor($x), $x;
?>