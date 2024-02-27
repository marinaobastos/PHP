<?php
// Considere código abaixo:
$a = [];
for ( $i = 0; $i < 10; $i++ ) {
    $a []= random_int( 0, 100 );
}
// Crie uma função "media" que retorne a media do array recebido. Então, crie uma função "maioresQueMedia" 
// que receba um array e retorne um array contendo apenas os elementos que forem maiores que a média. 
// Imprima a média e os elementos maiories que a média para o array acima.

function media($a) {
    $mediaArray = array_sum($a) / count($a);
    return $mediaArray;
}

function maioresQueMedia($a) {
    $mediaArray = media($a);
    $novoArray = [];

    foreach($a as $valor) {
        if($valor > $mediaArray)
            array_push($novoArray, $valor);
    }

    return $novoArray;
}

var_dump($a);
echo "\n" .'A média é ' . media($a) . "\n";

echo 'Valores maiores que a média: ';
print_r(maioresQueMedia($a));

?>