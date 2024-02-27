<?php
// Exemplo 3

$nome = readline('Escreva seu nome: ');

echo "Olá $nome.\n";
echo "Seu nome possui " . mb_strlen($nome) . " caracteres.\n";
echo "Seu nome possui " . bytes($nome) . " bytes.";

function bytes($nome) {
    return strlen($nome);
}

echo "\nNúmero de bytes do emoji de coração: " . bytes('❤');
echo "\nNúmero de bytes do emoji de coração: " . bytes("❤");

?>