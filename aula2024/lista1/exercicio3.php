<?php
// Crie uma função que receba um array de números de telefone (formatados ou não) e retorne 
// os telefones repetidos desse array (uma ocorrência de cada número repetido).

function telRepetidos($telefones) {

    foreach($telefones as $t => $valor) {

        $i = 0;
        while($i >= count($t)) {
            if($t[$i] == $t[$i + 1]) {
                $telefonesIguais = [];
                $telefonesIguais = $t[$i];
            }

            ++$i;
        }

    }

    return $telefonesIguais;
}

$telefones = [
    ['tel' => 22998947227],
    ['tel' => 22998936008],
    ['tel' => 22998947227],
    ['tel' => 22997702409],
    ['tel' => 22997709024],
    ['tel' => 22997702409],
];

printf(telRepetidos($telefones));
//print_r($telefonesIguais);


?>