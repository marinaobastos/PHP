<?php
// 12 - Parâmetros com valor default
function potencia($base, $expoente = 2) { # expoente é sempre igual a 2 neste caso
    $valor = $base;

    for($i = 1; $i < $expoente; ++$i) {
        $valor = $valor*$base;
    }

    return $valor;
}

echo potencia(10) . "\n";
echo potencia(10, 3); // inferindo um valor para o expoente

?>