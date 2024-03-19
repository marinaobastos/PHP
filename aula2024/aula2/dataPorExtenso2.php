<?php
// Exercício: Crie uma função chamada "extenso" que receba um dia, um mês e um ano e retorne 
// no formato equivalente ao abaixo: 29 de Fevereiro de 2024

function extenso( $dia, $mes, $ano ) {
    $meses = [
        '01' => 'Janeiro',
        '02' => 'Fevereiro',
        '03' => 'Março',
        '04' => 'Abril', 
        '05' => 'Maio', 
        '06' => 'Junho', 
        '07' => 'Julho', 
        '08' => 'Agosto', 
        '09' => 'Setembro', 
        '10' => 'Outubro', 
        '11' => 'Novembro', 
        '12' => 'Dezembro'
    ];

    if( ! isset($meses[$mes])) { // se não existir o mês 
        return "$dia de ??? de $ano.";
    }

    return "$dia de $meses[$mes] de $ano.";
}

$data = readline('Escreva uma data aa/aa/aaaa: ');
//$data = ltrim($data, "0");
$a = explode('/', $data);

// ltrim($a[1], "0");

echo extenso($a[0], $a[1], $a[2]);
?>