<?php
// Crie uma função que receba o array de inventores e número de um século (ex.: 16) e 
// retorne somente os inventores que viveram nele, mesmo que parcialmente

$inventores = [
    [ "nome" => 'Albert', "sobrenome" => 'Einstein', "nasc" => 1879, 
    "morte" => 1955 ],
    [ "nome" => 'Isaac', "sobrenome" => 'Newton', "nasc" => 1643, 
    "morte" => 1727 ],
    [ "nome" => 'Galileo', "sobrenome" => 'Galilei', "nasc" => 1564, 
    "morte" => 1642 ],
    [ "nome" => 'Nicolaus', "sobrenome" => 'Copernicus', "nasc" => 1473, 
    "morte" => 1543 ],
    [ "nome" => 'Ada', "sobrenome" => 'Lovelace', "nasc" => 1815, 
    "morte" => 1852 ]
];

// Função para verificar quais inventores viveram em determinado século
function InventorSeculo($inventores, $seculo) {

    $inicioSeculo = ($seculo - 1) * 100 + 1;

    $fimSeculo = $seculo * 100;

    $inventoresSeculo = [];

    foreach($inventores as $inventor) {

        if(($inventor['nasc'] >= $inicioSeculo && $inventor['nasc'] <= $fimSeculo) ||
        ($inventor['morte'] >= $inicioSeculo && $inventor['morte'] <= $fimSeculo)) {
            $inventoresSeculo[] = $inventor;
        }
    }

    return $inventoresSeculo;
}

$resultadoSeculo = InventorSeculo($inventores, 16);
print_r($resultadoSeculo);

?>