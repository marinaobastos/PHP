<?php
// a) Crie um programa que leia um nome e uma idade de um aluno e os guarde como um mapa (array).
// b) Modifique o programa para cadastrar os dados de quantos alunos o usuário desejar, guardando-os 
// em um array de alunos.
// c) Modifique o programa para também permitir pesquisar um aluno cadastrado pelo nome. Se ele for 
// encontrado, imprima também a sua idade.

// OPÇÕES CADASTRAR E PESQUISAR

const OPCAO_CADASTRAR = 1;
const OPCAO_PESQUISAR = 2;
const OPCAO_LISTAR = 3;
const OPCAO_ALTERAR = 4;
const OPCAO_REMOVER = 5;
const OPCAO_SAIR = 6;

$alunos = [

];

// MENU DE EXIBIÇÃO
function menu() {
    echo <<<MENU

        1) Cadastrar aluno.
        2) Pesquisar aluno.
        3) Listar alunos.  
        4) Alterar aluno.
        5) Remover aluno.
        6) Sair.
    MENU;

    echo "\n\n";
    $escolha = readline('Escolha: ');
    return (int)$escolha;
}

// FUNÇÃO PARA CADASTRAR ALUNOS
function cadastrarAluno(&$alunos) {
    echo "\n" . 'Cadastro de alunos' . "\n";
    $nome = readline('Nome: ');
    $idade = readline('Idade: ');
    echo "\n";

    $a = ['nome' => $nome, 'idade' => $idade];
    array_push($alunos, $a);
}

// FUNÇÃO PARA PESQUISAR UM ALUNO
function pesquisarAluno($alunos) {
    echo "\n" . 'Pesquisar alunos' . "\n";

    $dadoDoAluno = readline('Pesquise por nome ou idade: ');

    foreach($alunos as $indice => $valor) {
        // PESQUISA POR NOME
        $encontrouNome = stripos($valor['nome'], $dadoDoAluno) !== false;

        //$encontrouNome = $indiceNome !== false; // diferente de falso, então é verdadeiro

        if($encontrouNome) {
            return $indice;
        }

        // PESQUISA POR IDADE
        $encontrouIdade = stripos($valor['idade'], $dadoDoAluno) !== false;

        //$encontrouIdade = $indiceIdade !== false;

        if($encontrouIdade) {
            return $indice;
        }
    }

    return false;
}


// FUNÇÃO PARA LISTAR ALUNOS
function listarAluno($alunos) {
    echo "\nListar Alunos\n";

    foreach($alunos as $a) {
        echo "\nNome: " . $a['nome'] . " e idade: " . $a['idade'];
    }
    echo "\n";
}


// FUNÇÃO PARA ALTERAR ALUNO
function alterarAluno(&$alunos) {
    $pesquisa = pesquisarAluno($alunos);

    if($pesquisa !== false) {  // aluno encontrado
        echo "\nAlterar aluno\n";

        $nome = readline('Novo nome: ');
        $idade = readline('Nova idade: ');

        $alunos[$pesquisa]['nome'] = $nome;
        $alunos[$pesquisa]['idade'] =$idade;

        echo "\nAlterado com sucesso.\n";
        print_r($alunos);

    } else {
        echo "\nAluno não encontrado.\n";
    }
}



// SWTICH PARA ESCOLHER A OPÇÃO DESEJADA
do {
    $escolha1 = menu();

    switch($escolha1) {
        case OPCAO_CADASTRAR: cadastrarAluno($alunos); break;
        case OPCAO_PESQUISAR: 
            $alunoEncontrado = pesquisarAluno($alunos);

            if ($alunoEncontrado) {
                echo "\nAluno encontrado: " . $alunoEncontrado['nome'] . ". Idade: " . $alunoEncontrado['idade'] . "\n\n";
            } else {
                echo "\nAluno não encontrado.\n\n";
            }
            break;
        case OPCAO_LISTAR: listarAluno($alunos); break;
        case OPCAO_ALTERAR: alterarAluno($alunos); break;
    }

} while($escolha1 != OPCAO_SAIR);



?>