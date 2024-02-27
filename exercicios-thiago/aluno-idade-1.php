<?php
// a) Crie um programa que leia um nome e uma idade de um aluno e os guarde como um mapa (array).
// b) Modifique o programa para cadastrar os dados de quantos alunos o usuário desejar, guardando-os 
// em um array de alunos.
// c) Modifique o programa para também permitir pesquisar um aluno cadastrado pelo nome. Se ele for 
// encontrado, imprima também a sua idade.

// COMEÇANDO PELA OPÇÃO CADASTRAR

const OPCAO_CADASTRAR = 1;
const OPCAO_PESQUISAR = 2;
const OPCAO_LISTAR = 3;
const OPCAO_SAIR = 4;

$alunos = [

];

function menu() {
    echo <<<MENU
        1) Cadastrar aluno.
        2) Pesquisar aluno.
        3) Listar alunos.  
        4) Sair.
    MENU;

    echo "\n\n";
    $escolha = readline('Escolha: ');
    return (int)$escolha;
}


function cadastrarAluno(&$alunos) {
    echo "\n" . 'Cadastro de alunos' . "\n";
    $nome = readline('Nome: ');
    $idade = readline('Idade: ');
    echo "\n";

    $a = ['nome' => $nome, 'idade' => $idade];
    array_push($alunos, $a);
}

do {
    $escolha1 = menu();

    switch($escolha1) {
        case OPCAO_CADASTRAR: cadastrarAluno($alunos); break;
    }

} while($escolha1 != OPCAO_SAIR);



?>