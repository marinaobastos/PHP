<?php
// Dado o array de inventores abaixo:
// Crie uma função que receba o array de inventores e retorne outro array contendo o 
// sobrenome de cada inventor e uma chave indicando quantos anos viveu. Por exemplo, 
// se o array de inventores tivesse apenas Einstein, seria retornado um array como o abaixo:
// [ [ "sobrenome" => 'Einstein', "viveu" => 77 ] ]


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
    
// Calcular anos vividos
function calcularAnosVividos($nascimento, $morte) {
    $viveu = $morte - $nascimento;
    return $viveu;
}

// Função que cria o array pedido[
function sobrenomeEAnosVividos($inventores) {
    $anosVividos = [];

    foreach($inventores as $i) {
        $sobrenome = $i['sobrenome'];

        $anosVividos[] = [
            "sobrenome" => $sobrenome,
            "viveu" => calcularAnosVividos($i['nasc'], $i['morte'])
        ];
    }

    return $anosVividos;
}

$resultado = sobrenomeEAnosVividos($inventores);

print_r($resultado);

?>