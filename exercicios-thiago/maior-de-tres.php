<?php
// 2) Crie um arquivo "maior-de-tres.php" que contenha uma função "maiorDeTres" que retorne o maior de três números
// recebidos como argumento. Para isso,utilize a função "maiorDeDois", importando o arquivo usando require_once

require_once 'maior-de-dois.php';

function maiorDeTres($valor1, $valor2, $valor3) {
    $maior1 = maiorDeDois($valor1, $valor2);
    $maior2 = maiorDeDois($maior1, $valor3);
    return $maior2;
}

$num1 = readline('Digite um número: ');
$num2 = readline('Digite um número: ');
$num3 = readline('Digite um número: ');

echo 'O maior número é ' . maiorDeTres($num1, $num2, $num3);

?>