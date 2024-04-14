<?php
// Crie uma função que receba um array de números de telefone (formatados ou não) e retorne 
// os telefones repetidos desse array (uma ocorrência de cada número repetido).

$telefones = [
    '30044000',
    '2225271727',
    '08007024000',
    '22987654321',

    '30044000',

    '08007024000'
];

function telefonesRepetidos($telefones) {

    $contagem = [];

    foreach($telefones as $t) {

        if(isset($contagem[$t])) {
            ++$contagem[$t];
            
        } else{
            $contagem[$t] = 1;
        }
    }

    $repetidos = [];

    foreach($contagem as $indiceTelefone => $t) {

        if($t > 1) {
            $repetidos []= $indiceTelefone;
        }
    }

    return $repetidos;
}

print_r(telefonesRepetidos($telefones));

?>