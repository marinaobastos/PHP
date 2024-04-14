<?php
// Crie uma função palindromo que verifique se um texto é um palíndromo (se o texto lido 
// ao contrário é igual ao informado). Use, em sua construção, as funções
// removerPontuacao e removerDiacriticos, criadas anteriormente. Teste sua função 
// com os exemplos a seguir: “Saíram o tio e oito marias”, “Seco de raiva, coloco no colo 
// caviar e doces.”, “Socorram-me, subi no ônibus em Marrocos!”, “A diva em Argel alegra-me a vida.“, 
// “Sá da tapas e sapatadas”

function palindromo($texto) {

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

    $pontuacoes = [',', '.', ';', ':', '?', '!', '-'];

    // Remove os espaços em branco do texto
    $texto_sem_espacos = str_replace(' ', '', $remover_diacritico);

    // Remove a pontução do texto
    $texto_sem_pontuacao = str_replace($pontuacoes, '', $texto_sem_espacos);

    // Inverte o rexto
    $texto_invertido = strrev($texto_sem_pontuacao);

    if($texto_invertido === $texto_sem_pontuacao) {
        return true;
    } else {
        return false;
    }
}

$texto1 = "socorram-me subi no ônibus em marrocos";
$texto2 = "arara";
$texto3 = "palíndrome";

echo palindromo($texto1) ? "É um palíndromo\n" : "Não é um palíndromo\n"; // Saída: É um palíndromo
echo palindromo($texto2) ? "É um palíndromo\n" : "Não é um palíndromo\n"; // Saída: É um palíndromo
echo palindromo($texto3) ? "É um palíndromo\n" : "Não é um palíndromo\n"; // Saída: Não é um palíndromo

?>