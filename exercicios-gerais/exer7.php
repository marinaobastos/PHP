<?php
// 7 - Faça um script que calcule a área de um quadrado, em seguida mostre o dobro desta área para o usuário.

function areaQuadrado($lado) {
    $area = pow($lado, 2);
    
    return $area * 2;
}

echo areaQuadrado($lado = readline('Digite o lado: '));

?>