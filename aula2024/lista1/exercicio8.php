<?php
// Crie uma função removerPontuacao que remova todos os espaços de um texto, além das 
// seguintes pontuações: vírgula, traço, ponto, ponto-e-vírgula, dois pontos, exclamação e 
// ponto-de-interrogação

function removerPontuacaoEspaco($texto) {
    $pontuacoes = [',', '.', ';', ':', '?', '!', '-'];

    // Remove os espaços em branco do texto
    $texto_sem_espacos = str_replace(' ', '', $texto);

    // Remove a pontução do texto
    $texto_sem_pontuacao = str_replace($pontuacoes, '', $texto_sem_espacos);

    return $texto_sem_pontuacao;

}

$texto = readline('Texto: ');
echo removerPontuacaoEspaco($texto);

?>