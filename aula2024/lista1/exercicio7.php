<?php
// Crie uma função removerDiacriticos que remova de um texto, fornecido por 
// parâmetro, os diacríticos de vogais acentuadas com acento agudo, acento grave, trema, 
// acento circunflexo e til, além de remover a cedilha da consoante c.

function removerDiacriticos($texto) {

    $alterar = [
        'á' => 'a', 'à' => 'a', 'ã' => 'a', 'â' => 'a',
        'é' => 'e', 'è' => 'e', 'ê' => 'e',
        'í' => 'i', 'ì' => 'i', 'î' => 'i',
        'ó' => 'o', 'ò' => 'o', 'õ' => 'o', 'ô' => 'o',
        'ú' => 'u', 'ù' => 'u', 'û' => 'u',
        'ç' => 'c', 
        'Á' => 'A', 'À' => 'A', 'Ã' => 'A', 'Â' => 'A',
        'É' => 'E', 'È' => 'E', 'Ê' => 'E',
        'Í' => 'I', 'Ì' => 'I', 'Î' => 'I',
        'Ó' => 'O', 'Ò' => 'O', 'Õ' => 'O', 'Ô' => 'O',
        'Ú' => 'U', 'Ù' => 'U', 'Û' => 'U',
        'Ç' => 'C'
    ];

    // Remover diacriticos
    $remover_diacritico = strtr($texto, $alterar);

    return $remover_diacritico;
}

$texto = readline('Texto: ');
echo removerDiacriticos($texto); 

?>