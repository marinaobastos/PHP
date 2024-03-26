<?php
// 1) Crie uma função que retorne formatado um número de telefone recebido por argumento.
// O formato deve estar de acordo com os exemplos fornecidos.

function oitoDigitos($num) {
    $parte1 = mb_substr($num, 0, 4);
    $parte2 = mb_substr($num, 4, 8);

    return "$parte1 $parte2";
}

// 22 1234-5678
function dezDigitos($num) {
    $parte1 = mb_substr($num, 0, 2);
    $parte2 = mb_substr($num, 2, 4);
    $parte3 = mb_substr($num, 6);

    return "($parte1) $parte2-$parte3";
}

// 22 9 97702409
function onzeDigitos($num) {
    $parte1 = mb_substr($num, 0, 2);
    $parte2 = mb_substr($num, 2, 1);
    $parte3 = mb_substr($num, 3, 4);
    $parte4 = mb_substr($num, 7);

    return "($parte1) $parte2-$parte3-$parte4";
}

function onzeDigitosExcecao($num) {
    $parte1 = mb_substr($num, 0, 4);
    $parte2 = mb_substr($num, 4, 3);
    $parte3 = mb_substr($num, 7);

    return "$parte1 $parte2 $parte3";
}


$numero = readline('Digite o número: ');
// echo oitoDigitos($numero);
// echo dezDigitos($numero);
// echo onzeDigitos($numero);
// echo onzeDigitosExcecao($numero);

?>