<?php

// Função para gerar o array da sequência de Fibonacci
function fibArray($n) {
    $fib = [1, 1];
    
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    
    return $fib;
}

// Gerar um número aleatório entre 1 e 100
$aleatorio = rand(1, 100);
echo 'Número aleatório gerado: ' . $aleatorio . PHP_EOL;

// Obter o array da sequência de Fibonacci para o número aleatório
$arrayFib = fibArray($aleatorio);

// Imprimir o array retornado
echo 'Array da sequência de Fibonacci para ' . $aleatorio . ': ' . implode(', ', $arrayFib) . PHP_EOL;

?>