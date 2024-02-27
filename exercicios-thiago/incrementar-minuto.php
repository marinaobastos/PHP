<?php
// Crie a função "incrementarUmMinuto" que receba uma string com um horário no formato 24 horas, como "hh:mm", 
// e retorne o horário incrementado em um minuto. Exemplos: 13:00 -> 13:01 e 13:59 -> 14:00

$horario = readline('Informe as horas: ');

function incrementarUmMinuto($horario) {
    $partes = explode(':', $horario);
    $hora = $partes[0];
    $minuto = $partes[1];

    if($minuto < 59)
        ++$minuto;
    else {
        $minuto = 0;
        $hora++;

        if($hora >= 24)
            $hora = 0;
    }

    return inserirZero( $hora ) . ':' . inserirZero( $minuto );
}

/* CASO O NÚMERO SEJA MENOR QUE ACRESCENTA UM ZERO NA FRENTE, POR EXEMPLO: 09

function inserirZero( $num ) {
    return $num < 10 ? '0' . $num : $num;
}
*/

function inserirZero($num) {    // $num pode ser $hora ou $minuto
    if($num < 10)
        return '0' . $num;
    else 
        return $num; 
}

echo incrementarUmMinuto($horario);

/*
echo incrementarUmMinuto( '13:00' ), PHP_EOL;
echo incrementarUmMinuto( '13:59' ), PHP_EOL;
echo incrementarUmMinuto( '23:59' ), PHP_EOL;
*/




/* TESTE
function incrementarUmMinuto(&$min) {
    ++$min;
}

$hora = readline('Informe a hora: ');

$minuto = explode(':', $hora);
incrementarUmMinuto($minuto[1]);

implode(':', $horas);
echo "$minuto[0]:$minuto[1]";
*/

?>