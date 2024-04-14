<?php
// Crie uma função que receba o array abaixo e retorne outro array que contabilize o 
// número de ocorrências de cada palavra.

$dados = [ 'carro', 'carro', 'caminhão', 'caminhão', 'bicicleta', 
'caminhada', 'carro', 'van', 'bicicleta', 'caminhada', 'carro', 
'van', 'carro', 'caminhão', 'moto' ];

function palavrasRepetidas($dados) {

    $existeRepeticao = [];

    foreach($dados as $d) {
        if(isset($existeRepeticao[$d])) {
            ++$existeRepeticao[$d];
        } else {
            $existeRepeticao[$d] = 1;
        }
    }
    
    //print_r($existeRepeticao);
    //echo "\n\n";

    $dadosRepetidos = [];

    foreach($existeRepeticao as $indiceRepetido => $valorRepetido) {

        if($valorRepetido > 1){
            $dadosRepetidos []= $indiceRepetido;
        }

        echo $indiceRepetido, PHP_EOL;
        echo $valorRepetido, PHP_EOL;

    }

    //print_r($dadosRepetidos);
    //echo "\n\n";

    return $dadosRepetidos;
}

print_r(palavrasRepetidas($dados));


?>