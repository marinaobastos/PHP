<?php
// Exemplo 4

$numero = readline('Informe um número: ');
echo "Número: $numero.", PHP_EOL;
echo 'Número: $numero.', PHP_EOL;
echo $numero + 10, PHP_EOL;
echo 'Número: ' . $numero . "\n";
echo 'Número: ' . $numero . PHP_EOL;
echo 'Número: ' , $numero , PHP_EOL;
var_dump($numero); 
var_dump((int) $numero);
echo is_numeric($numero); // 0 -> sim, 1 -> não

// Perfomance -> apostrófo é melhor
// , (vírgula) imprime em sequência
// . (ponto) string única, concatena todo mundo

?>