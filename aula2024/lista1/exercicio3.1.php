<?php
// Crie uma função que receba um array de números de telefone (formatados ou não) e retorne 
// os telefones repetidos desse array (uma ocorrência de cada número repetido).

$telefones = [
    '3004400',
    '2225238435',
    '22997702409',
    '080007204000',
    '2225238435',
    '3004400'
];

function telefoneRepetido($telefones) {

    $contagem = [];

    foreach($telefones as $t) {
        if(isset($contagem[$t])) {
            $contagem[$t]++;

        } else {
            $contagem[$t] = 1;
        }
    }

    $repetidos = [];
    foreach($contagem as $telefone => $valor) {
        if($valor > 1) {
            $repetidos []= $telefone;
        }
    }

    return $repetidos;
}

print_r(telefoneRepetido($telefones));

?>