<?php
// Crie uma função que retorne formatado um número de telefone recebido por argumento. O 
// formato deve estar acordo com os exemplos fornecidos abaixo.
// Se o número recebido pela função contiver algum caractere não numérico, a função deve 
// retornar o próprio número recebido. O mesmo comportamento deve ocorrer caso a 
// quantidade de dígitos do número não corresponder aos exemplificados na tabela acima.

function formataTelefone($telefone) {
    $tamanhoTelefone = mb_strlen($telefone);

    if($tamanhoTelefone == 8) {
        return mb_substr($telefone, 0, 4) . ' ' . mb_substr($telefone, 4);

    } else if($tamanhoTelefone == 10) {
        return '(' . mb_substr($telefone, 0, 2) . ') ' .
                mb_substr($telefone, 2, 4) . '-' .
                mb_substr($telefone, 6);

    } else if($tamanhoTelefone == 11) {
        $prefixo = mb_substr($telefone, 0, 4);

        if($prefixo === '0800' || $prefixo === '0300') {
            return mb_substr($telefone, 0, 4) . ' ' .
                    mb_substr($telefone, 4, 3) . ' ' . 
                    mb_substr($telefone, 7);
        } else {
            return '(' . mb_substr($telefone, 0, 2) . ') ' .
            mb_substr($telefone, 2, 1) . '-' .
            mb_substr($telefone, 3, 4) . '-' .
            mb_substr($telefone, 7);
        }
    }

    return $telefone;
}

//echo formataTelefone('22998947227');



?>