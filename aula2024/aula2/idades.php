<?php
// 1) Crie um programa que solicite um nome e uma idade do usuário, até que ele responda
// "N" à pergunta "Deseja incluir mais um? (S/N): ".
// Em seguida, liste todos os usuários e suas idades correspondentes. Ambas devem ser
// armazenadas em um array na forma de uma mapa
// 2) Acrescente ao problema a impressão da maior idade, indicando o nome da pessoa e
// sua idade. Por exemplo: "A pessoa mais velha é Ana, que possui 92 anos."
// 3) Acrescente ao problema a solicitação ao usuário de um nome e retire-o da lista de
// usuários. Ex: "Nome a remover: ". Caso não encontrado, indique uma mensagem.

const OPCAO_SAIR = 'N';
const OPCAO_FICAR = 'S';

$idades = [];

do {
    $nome = readline('Nome: ');
    $idade = readline('Idade: ');

    if( ! is_numeric($idade)) {
        echo 'Idade inválida.' . PHP_EOL;
        continue;
    }

    $idades[$nome] = $idade;

    $maisUm = readline('Incluir mais um? (S/N): ');

} while(mb_strtolower( $maisUm ) != 'n');

$maiorIdade = 0;
$nomeComMaiorIdade = '';
echo "\n";

foreach($idades as $nome => $idade) {
    echo "$nome possui $idade anos.\n";

    if($idade > $maiorIdade) {
        $maiorIdade = $idade;
        $nomeComMaiorIdade = $nome;
    }
}

echo "\n$nomeComMaiorIdade é a pessoa mais velha, com $maiorIdade anos.";


?>