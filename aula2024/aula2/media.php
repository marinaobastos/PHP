<?php
// Exercício:
// Crie uma função que solicite do usuário um número indefinido de números, até que entre com o número 0.
// Guarde os números em um array e, então, calcule e imprima a média desses números.
// DICA: Use a função readline() para solicitar do usuário uma string. Ex: $num = readline( 'Digite um número: ' );

function mediaArray() {
    $numeros = [];
    
    do{
    $num = readline('Digite um número (0 para sair): ');

    //$numeros = [];
    array_push($numeros, (int)$num);

    } while ($num != '0');

    array_pop($numeros);

    $somatorio = 0;
    foreach($numeros as $numero) {
        $somatorio = $somatorio + $numero;
    }

    $media = $somatorio / count($numeros);
    echo "\nA média é $media.";
}

mediaArray();

?>