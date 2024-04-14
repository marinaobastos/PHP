<?php

function telefonesRepetidos($telefones) {
    $contagem = [];

    foreach ($telefones as $t) {
        if (isset($contagem[$t])) {
            ++$contagem[$t];
        } else {
            $contagem[$t] = 1;
        }
    }

    $repetidos = []; // Inicializando $repetidos como um array

    foreach ($contagem as $indiceTelefone => $t) {
        if ($t > 1) {
            $repetidos[] = $indiceTelefone;
        }
    }

    return $repetidos;
}

// Exemplo de uso:
$telefones = [
    '30044000',
    '2225271727',
    '08007024000',
    '22987654321',
    '30044000',
    '08007024000'
];

print_r(telefonesRepetidos($telefones));

?>