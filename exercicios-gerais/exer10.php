<?php
//10 - Escreva um algoritmo que receba um valor, calcule e mostre para usuário 15% deste valor.

$valor = readline('Digite um valor: ');

$porcentagem = ((float)$valor * 0.15);

echo "15% de $valor é: $porcentagem.";

?>