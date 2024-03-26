<?php
// 1) Crie uma função que retorne formatado um número de telefone recebido por argumento.
// O formato deve estar de acordo com os exemplos fornecidos.
// CORREÇÃO DO PROFESSOR

function formatarTelefone($telefone) {
    $tamanho = mb_strlen($telefone);

    if($tamanho == 8) {
        $parte1 = mb_substr($telefone, 0, 4);
        $parte2 = mb_substr($telefone, 4);

        return "$parte1 $parte2";
    }

    else if($tamanho == 10) {
        $parte1 = mb_substr($telefone, 0, 2);
        $parte2 = mb_substr($telefone, 2, 4);
        $parte3 = mb_substr($telefone, 6);

        return "($parte1) $parte2-$parte3";
    }

    else if($tamanho == 11) {

        $prefixo = mb_substr($telefone, 0, 4);

        if($prefixo == '0800' || $prefixo == '0300') {
            $parte1 = mb_substr($telefone, 0, 4);
            $parte2 = mb_substr($telefone, 4, 3);
            $parte3 = mb_substr($telefone, 7);

            return "$parte1 $parte2 $parte3";
        }

        else {
            $parte1 = mb_substr($telefone, 0, 2);
            $parte2 = mb_substr($telefone, 2, 1);
            $parte3 = mb_substr($telefone, 3, 4);
            $parte4 = mb_substr($telefone, 7);

            return "($parte1) $parte2-$parte3-$parte4";
        }

    }
}

// $numero = readline('Digite um telefone: ');
// echo formatarTelefone($numero);

?>