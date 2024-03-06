<?php
// Diferença de valores entre arrays

$a1 = [
    'a' => 'verde', 'vermelho', 'azul', 'vermelho'];
// chaves: a => verde, 0 => vermelho, 1 => azul, 2 => vermelho

$a2 = [
    'b' => 'verde', 'amarelo', 'vermelho'];
// chaves: b => verde, 0 => amarelo, 1 => vermelho

$a3 = ['verde', 'vermelho', 'azul', 'roxo'];
// chaves: 0 => verde, 1 => vermelho, 2 => azul, 3 => roxo

$diferenca = array_diff($a1, $a2);
var_dump($diferenca) . PHP_EOL;

$distinto = array_diff($a2, $a1);
var_dump($distinto) . PHP_EOL;

$desigual = array_diff($a1, $a3);
var_dump($desigual) . PHP_EOL;

$naoIgual = array_diff($a3, $a1);
var_dump($naoIgual);

?>