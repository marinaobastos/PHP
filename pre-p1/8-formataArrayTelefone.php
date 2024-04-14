<?php
// Crie uma função que receba, via passagem por referência, um array de números de 
// telefone não formatados e formate cada telefone desse array com a função construída 
// anteriormente

require_once "7-formataTelefone.php";

$telefones = [
    '30044000',
    '2225238435',
    '08007024000',
    '22998947227'
];

function formataArrayTelefones(&$telefones) {

    foreach($telefones as $indice => $t) {
        $telefones[$indice] = formataTelefone($t);
    }
}

formataArrayTelefones($telefones);
print_r($telefones);


?>