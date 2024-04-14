<?php
// Crie um script fib.php que imprima N números da sequência de Fibonacci. Use a função rand do PHP 
// para gerar um número (pseudo-)aleatório entre 1 e 20, que deve ser usado como valor de N.
// int rand( int $min, int $max )

// Função Fibonacci
function fibonacci($num) {

    $fib = [];
    $fib[0] = 1;
    $fib[1] = 1;

    for($i = 2; $i <= $num; ++$i) {
        $fib[$i] = $fib[$i - 1] +  $fib[$i - 2];
    }

    return $fib;
}

// Gerar um número aleatório entre 1 e 20 para N
$aleatorio = rand(1, 20);
echo 'Número aleatório gerado: ' . $aleatorio, PHP_EOL;

// Imprimir os primeiros N números da sequência de Fibonacci
echo "Os primeiros $aleatorio números da sequência de Fibonacci são: \n";

$fibo = fibonacci($aleatorio);

// Imprimir
foreach($fibo as $numeros) {
    echo $numeros, PHP_EOL;
}

?>