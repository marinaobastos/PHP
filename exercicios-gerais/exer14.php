<?php
// 1) Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é par, 
// ímpar ou igual a zero. A saída deve ser: "Valor Par", "Valor Ímpar" ou "Igual a Zero".

function parImpar($numero) {

    if(is_numeric($numero)) {

        if($numero == 0)
            echo 'O número é zero.';
        else if((float)$numero % 2 == 0)
            echo 'O número é par.';
        else if((float) $numero % 2 != 0)
            echo 'O número é ímpar.';

    } else {
        echo 'Não é um número.';
    }
}

$numero = readline('Digite um número: ');
parImpar($numero);

?>