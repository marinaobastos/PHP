<?php
// 1) Crie um arquivo "maior-de-dois.php" que contenha uma função "maiorDeDois" que retorne o maior 
// de dois números recebidos como argumento. Após checar a função, comente o código de verificação.

function maiorDeDois($valor1, $valor2) {
    if($valor1 > $valor2)
        return $valor1;
    else if($valor2 > $valor1)
        return $valor2;
    else
        die('Eles são iguais.');
}

#$num1 = readline('Digite um número: ');
#$num2 = readline('Digite outro número: ');

#echo 'O maior número é ' . maiorDeDois($num1, $num2);
?>