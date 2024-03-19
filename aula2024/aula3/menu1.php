<?php
// EXERCÍCIO:
// 1) Crie a opção para ALTERAR um contato. Para isso, faça como a opção REMOVER e solicite a posição do
// contato a ser alterada. Então, os dados.
// 2) Crie uma validação para os contatos, com as seguintes
//    regras:
//    a) o nome deve ter de 2 a 100 caracteres;
//    b) o telefone deve ter no máximo 10 caracteres.
// Crie uma única função de validação e a reutilize nas operações de cadastro e alteração.
// Se os dados não passarem na validação, informe o usuário e não realize a operação de cadastro/alteração.

const OPCAO_SAIR = '0';
const OPCAO_LISTAR = '1';
const OPCAO_CADASTRAR = '2';

$contatos = [];

do {
    echo 'Menu', PHP_EOL;
    desenharLinha();
    echo '0) Sair', PHP_EOL;
    echo '1) Listar', PHP_EOL;
    echo '2) Cadastrar', PHP_EOL;
    desenharLinha();

    $opcao = readline('Seleciona uma opção: ');
    desenharLinha();

    switch($opcao) {
        case OPCAO_SAIR: break;
        case OPCAO_LISTAR: listar($contatos); break;
        case OPCAO_CADASTRAR: cadastrar($contatos); break;
    }


} while($opcao != OPCAO_SAIR);


function listar($contatos) {
    echo 'Listagem', PHP_EOL;
    desenharLinha();

    foreach($contatos as $indice => $c) {
        echo ($indice + 1) . ') ' . $c['nome'] . ' - ' . $c['telefone'], PHP_EOL;
    }

    desenharLinha();

}

function cadastrar(&$contatos) {
    echo 'Cadastrar', PHP_EOL;
    desenharLinha();

    $nome = readline('Nome: ');
    $telefone = readline('Telefone: ');

    $contatos[] = ['nome' => $nome, 'telefone' => $telefone];

    desenharLinha();

}


function desenharLinha() {
    echo str_repeat('-', 20), PHP_EOL;
}



?>