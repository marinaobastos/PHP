<?php
// 8 - Faça um script que calcule a área de um quadrado, em seguida mostre o dobro desta área para o usuário.

function areaQuadrado($lado) {
    return $area = pow($lado, 2);
}

function dobroAreaQuadrado($lado){
    return areaQuadrado($lado)*2;
}

echo dobroAreaQuadrado($lado = readline('Digite o lado: '));

?>