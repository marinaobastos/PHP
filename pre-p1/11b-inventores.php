<?php
// b) Crie uma função que receba o array de inventores e retorne a média de anos vividos 
// por eles.

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

// Função de média dos anos vivdos 
function mediaAnosVividos($inventores) {

    $somaAnos = 0;

    foreach($inventores as $inventor) {
        $nasc = $inventor['nasc'];
        $morte = $inventor['morte'];

        $anosVividos = $morte - $nasc;

        // Soma a diferença aos anos vividos de todos os inventores
        $somaAnos += $anosVividos;
    }

    $media = $somaAnos / count($inventores);
    return $media;
}

// Imprimindo a média de anos vividos
echo  "A média dos anos vividos é igual a: " . mediaAnosVividos($inventores);

?>