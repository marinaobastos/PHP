<?php
// Crie uma função fibArray que gere um array contendo os elementos da sequência de Fibonacci, 
// de acordo com o valor informado por argumento (ex: fib( 3) -> array( 1, 1, 2 )). Gere um
// número aleatório entre 1 e 100, informe para a função e imprima o array retornado.

// Função Fibonacci
function fibArray($num) {

    $fib = [];
    $fib[0] = 1;
    $fib[1] = 1;

    for($i = 2; $i <= $num; ++$i) {
        $fib[$i] = $fib[$i - 1] +  $fib[$i - 2];
    }

    return $fib;
}

// Gerar um número aleatório entre 1 e 100 para N
$aleatorio = rand(1, 100);
echo 'Número aleatório gerado: ' . $aleatorio, PHP_EOL;

$array = fibArray($aleatorio);

// Imprimir o array retornado
echo "Array da sequência de Fibonacci para $aleatorio: " . implode(', ', $array) . PHP_EOL;

?>