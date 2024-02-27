<?php
// Exemplo 2

$nome = readline('Escreva seu nome: ');

echo "Olá $nome.\n";
echo "Seu nome possui " . mb_strlen($nome) . " caracteres.";

?>