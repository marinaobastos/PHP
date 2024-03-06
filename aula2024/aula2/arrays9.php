<?php

$breakfast = ['café', 'pão', 'manteiga'];

list($bebida, $comida, $recheio) = $breakfast;
echo "Eu como $comida com $recheio, enquanto bebo $bebida." . PHP_EOL;

list($bebida, $comida, ) = $breakfast;
echo "Eu como $comida com $bebida." . PHP_EOL;

list(, $comida, $recheio) = $breakfast;
echo "$recheio combina muito com $comida." . PHP_EOL;

list(, $comida,) = $breakfast;
echo "Eu gosto de $comida." . PHP_EOL;

list( , $comida, ) = $breakfast;
echo "Eu não posso comer $comida.";
?>