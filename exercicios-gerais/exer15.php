<?php
// 1) Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, 
// negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".

function positivoNegativo($numero) {

    if(is_numeric($numero)) {

        if($numero == 0)
            echo 'O número é zero.';
        else if($numero > 0)
            echo 'O número é positivo.';
        else if($numero < 0)
            echo 'O número é negativo.';

    } else
        echo 'Não é um número.';
}

$numero = readline('Digite um número: ');
positivoNegativo($numero);


?>