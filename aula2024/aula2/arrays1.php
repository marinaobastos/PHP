<?php
// Treinando arrays - percorrendo elementos

$a = [0 => 100, 1 => 200, 2 => 300];

foreach ($a as $chave) {
    echo $chave, PHP_EOL;
}

foreach($a as $valor) {
    echo $valor, PHP_EOL;
}

// Resumindo: se dentro de um foreach você pedir para imprimir apenas um dado, ele irá imprimir
// apenas o valor que está armazenado dentro do array; independentemente de como você chamá-lo (chave ou valor)
// No primeiro chamei de chave e ele imprimiu o valor armazenado, e no segundo chamei de valor e ele imprimiu os
// valores armazenados no array. Ou seja, a nomenclatura não faz diferença; ele sempre irá imprimir o valor guardado

?>