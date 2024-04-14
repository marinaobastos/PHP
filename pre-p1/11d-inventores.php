<?php
// Crie uma função que retorne os inventores ordenados pelo sobrenome.

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


function ordenarPorSobrenome($a, $b) {

    // strcmp compara duas strings 
    return strcmp($a["sobrenome"], $b["sobrenome"]);
}


function listarInventoresOrdenadosPorSobrenome($inventores) {
    usort($inventores, 'ordenarPorSobrenome');
    return $inventores;
}

$inventoresOrdenados = listarInventoresOrdenadosPorSobrenome($inventores);

foreach ($inventoresOrdenados as $inventor) {
    echo /*$inventor['nome'] . ' ' .*/ $inventor['sobrenome'], PHP_EOL;
}



// $sobrenomes = array_column($inventores, 'sobrenome', 'nome');
// asort($sobrenomes);

// // $indicesOrdenados = ksort($sobrenomes);

// $ordemSobrenome = [];

// foreach($sobrenomes as $nome => $sobrenome) {
//     $ordemSobrenome []= $inventores[$nome];

// }

// print_r($ordemSobrenome);

?>