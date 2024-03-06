<?php
// Treinando arrays - percorrendo elementos

$a = [100, 200, 300];

foreach($a as $chave => $valor) {
    echo $chave . ' = ' . $valor, PHP_EOL;
}

foreach($a as $nomeQualquer => $outroNomeQualquer) {
    echo $nomeQualquer . ' = ' . $outroNomeQualquer, PHP_EOL;
}

foreach($a as $marina => $manuella) {
    echo $marina . ' = ' . $manuella, PHP_EOL;
}

// Resumindo: foda-se o nome que você der, o foreach sempre vai fazer a mesma coisa: imprimir apenas o valor 
// (código anterior), ou então imprimir a chave/índice e o valor como nesse caso.

?>