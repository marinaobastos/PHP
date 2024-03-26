<?php
// Crie uma função que receba, via passagem por referência, um array de números de 
// telefone não formatados e formate cada telefone desse array com a função construída 
// anteriormente.

require_once 'exercicio1.1.php';

$telefones = [
    '30044000',
    '2225238435',
    '08007024000',
    '22998947227'
];

function formatarTodosTelefones(&$telefones) {

    foreach($telefones as $indice => $t) {
        $telefones[$indice] = formatarTelefone($t);
    }
}

formatarTodosTelefones($telefones);
print_r($telefones);

?>