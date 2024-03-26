<?php
// b) Crie uma função que receba o array de inventores e retorne a média de anos vividos por eles.

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


// Função para calcular a média dos anos vividos pelos inventores
function mediaAnosVividos($inventores) {
    $soma = 0;

    foreach($inventores as $inventor) {
        $nasc = $inventor['nasc'];
        $morte = $inventor['morte'];

        // Calcula a diferença entre o ano de morte e o ano de nascimento do inventor
        $anosVividos = $morte - $nasc;

        // Soma a diferença aos anos vividos de todos os inventores
        $soma = $soma + $anosVividos;
    }

    $media = $soma / count($inventores);

    return $media;
}


// Função para calcular a média dos anos vividos pelos inventores
// function mediaAnosVividos($inventores) {
//     $media = 0;

//     foreach($inventores as $inventor) {
//         $nasc = $inventor['nasc'];
//         $morte = $inventor['morte'];

//         $media = ($inventor['morte'] - $inventor['nasc']) / count($inventor);
//     }

//     return $media;
// }



// Chamando a função e armazenando o resultado em uma variável
$resultado = anosVividosInventor($inventores);
// Imprimindo o resultado
print_r($resultado);

// Imprimindo a média de anos vividos
echo  "\nA média dos anos vividos é igual a: " . mediaAnosVividos($inventores);

?>