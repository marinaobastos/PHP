<?php
// Crie um script fib.php que imprime N números da sequ~encia de Fibonacci. Use a função rand() do php
// para gerar um número (pseudo-)aleatório entre 1 e 20, que deve ser usado como valor de N:
// int rand(int $min, int $max)

$numAleatorio = rand((int) 1, (int) 20);

function fibonacci($num) {
    $fib = [];
    $fib[0] = 0;
    $fib[1] = 1;

    echo 'Sequência de Fibonacci com ' . $num . ' números:' . PHP_EOL;

    echo $fib[0] . ' ' . $fib[1] . ' ';

    $i = 2;
    while($i < $num) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        echo $fib[$i] . ' ';
        ++$i;
    }
}

fibonacci($numAleatorio);



/*
for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        echo $fib[$i] . " ";


        */
?>