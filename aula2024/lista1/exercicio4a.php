<?php
// 4) Dado o array de inventores abaixo:
// a) Crie uma função que receba o array de inventores e retorne outro array contendo o 
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

// Função para calcular os anos vividos 
function calcularAnosVividos($nascimento, $morte) {
    $viveu = $morte - $nascimento;
    return $viveu;
}


// Função para criar o array com sobrenome e quantidade de anos vividos para cada inventor
function anosVividosInventor($inventores) {
    $anosVividos = [];

    foreach($inventores as $inventor) {
        $sobrenome = $inventor['sobrenome'];

        $anosVividos[] = [
            "sobrenome" => $sobrenome,
            "viveu" => calcularAnosVividos($inventor['nasc'], $inventor['morte'])
        ];
    }

    return $anosVividos;
}


// Chamando a função e armazenando o resultado em uma variável
$resultado = anosVividosInventor($inventores);


// Imprimindo o resultado
// var_dump($resultado);
print_r($resultado);


// ================================================================================


// function sobrenomeViveu($inventores) {

//     foreach($inventores as $chave => $Valor) {
//         $a = $chave["sobrenome"] . $chave["morte"]-$chave["nascimento"];
//         return $a;
//     }
// }

// print_r(sobrenomeViveu($inventores));


?>