<?php
// Exercício: Crie uma função chamada "extenso" que receba um dia, um mês e um ano e retorne 
// no formato equivalente ao abaixo: 29 de Fevereiro de 2024

function extenso($dia, $mes, $ano) {
    $mesPorExntenso = '';

    switch($mes){
        case 1: $mesPorExtenso = 'Janeiro'; break;
        case 2: $mesPorExtenso = 'Fevereiro'; break;
        case 3: $mesPorExtenso = 'Março'; break;
        case 4: $mesPorExtenso = 'Abril'; break;
        case 5: $mesPorExtenso = 'Maio'; break;
        case 6: $mesPorExtenso = 'Junho'; break;
        case 7: $mesPorExtenso = 'Julho'; break;
        case 8: $mesPorExtenso = 'Agosto'; break;
        case 9: $mesPorExtenso = 'Setembro'; break;
        case 10: $mesPorExtenso = 'Outubro'; break;
        case 11: $mesPorExtenso = 'Novembro'; break;
        case 12: $mesPorExtenso = 'Dezembro'; break;
        default: $mesPorExtenso = '???';
    }

    return "$dia de $mesPorExtenso de $ano.";
}

$data = readline('Escreva uma data aa/aa/aaaa: ');
$a = explode('/', $data);

echo extenso($a[0], $a[1], $a[2]);

?>