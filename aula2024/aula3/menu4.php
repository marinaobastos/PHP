<?php

// CONSTANTES
const OPCAO_SAIR = '0';
const OPCAO_LISTAR = '1';
const OPCAO_CADASTRAR = '2';
const OPCAO_REMOVER = '3';
const OPCAO_ALTERAR = '4';
const OPCAO_SALVAR = '5';
const OPCAO_CARREGAR = '6';

$contatos = [];

do {
    echo 'Menu', PHP_EOL;
    desenharLinha();
    echo '0) Sair', PHP_EOL;
    echo '1) Listar', PHP_EOL;
    echo '2) Cadastrar', PHP_EOL;
    echo '3) Remover', PHP_EOL;
    echo '4) Alterar', PHP_EOL;
    echo '5) Salvar para arquivo', PHP_EOL;
    echo '6) Carregar de arquivo', PHP_EOL;
    desenharLinha();

    $opcao = readline('Seleciona uma opção: ');
    desenharLinha();

    switch($opcao) {
        case OPCAO_SAIR: break;
        case OPCAO_LISTAR: listar($contatos); break;
        case OPCAO_CADASTRAR: cadastrar($contatos); break;
        case OPCAO_REMOVER: remover($contatos); break;
        case OPCAO_ALTERAR: alterar($contatos); break;
        case OPCAO_SALVAR: salvarParaArquivo($contatos); break;
        case OPCAO_CARREGAR: $contatos = carregarDeArquivo(); break;
        default: echo 'Opção inválida.', PHP_EOL;
    }


} while($opcao != OPCAO_SAIR);


// FUNÇÃO LISTAR
function listar($contatos) {
    echo '*** Listagem ***', PHP_EOL, PHP_EOL;
    // desenharLinha();

    foreach($contatos as $indice => $c) {
        echo ($indice + 1) . ') ' . $c['nome'] . ' - ' . $c['telefone'], PHP_EOL;
    }

    desenharLinha();

}


// FUNÇÃO CADASTRAR
function cadastrar(&$contatos) {
    echo '*** Cadastrar ***', PHP_EOL, PHP_EOL;
    // desenharLinha();

    $nome = readline('Nome: ');
    $telefone = readline('Telefone: ');

    $problemas = validarDados($nome, $telefone);

    if(count($problemas) > 0) {
        echo implode(PHP_EOL, $problemas);
    } else {
        $contatos[] = ['nome' => $nome, 'telefone' => $telefone];
    }
    //$contatos[] = ['nome' => $nome, 'telefone' => $telefone];

    desenharLinha();

}


// FUNÇÃO REMOVER
function remover(&$contatos) {
    echo '*** Remoção ***', PHP_EOL, PHP_EOL;
    // desenharLinha();

    $posicao = solicitarPosicao($contatos);

    if($posicao >= 0) {
        unset($contatos[$posicao]);
        echo 'Removido!', PHP_EOL;
        $contatos = array_values($contatos);
        desenharLinha();

    } else {
        echo 'Posição inválida.', PHP_EOL;
        desenharLinha();
    }

}


// FUNÇÃO ALTERAR
function alterar(&$contatos) {
    echo '*** Alteração ***', PHP_EOL, PHP_EOL;
    // desenharLinha();

    $posicao_alterar = solicitarPosicao($contatos);

    // if($posicao_alterar >= 0) {
    //     $contatos[$posicao_alterar]['nome'] = readline('Novo nome: ');
    //     $contatos[$posicao_alterar]['telefone'] = readline('Novo telefone: ');
    //     desenharLinha();

    // } else {
    //     echo 'Posição inválida.', PHP_EOL;
    //     desenharLinha();
    // }

    if($posicao_alterar >= 0) {
        $nome = readline('Novo nome: ');
        $telefone = readline('Novo telefone: ');

        $problemas = validarDados($nome, $telefone);

        if(count($problemas) > 0) {
            echo implode(PHP_EOL, $problemas);
        } else {
            $contatos[$posicao_alterar]['nome'] = $nome;
            $contatos[$posicao_alterar]['telefone'] = $telefone;
            desenharLinha();
        }

    } else {
        echo 'Posição inválida.', PHP_EOL;
        desenharLinha();
    }
}


// FUNÇÃO SOLICITAR POSIÇÃO 
function solicitarPosicao($contatos) {
    $posicao_alterar = readline('Posição: ');

    if(is_numeric($posicao_alterar) && array_key_exists($posicao_alterar - 1, $contatos)) {
        return (int) $posicao_alterar - 1;
    }

    return -1;
}


// FUNÇÃO PARA SALVAR ARQUIVO
function salvarParaArquivo($contatos) {
    $json = json_encode($contatos);
    file_put_contents('contatos.json', $json);
    echo 'Salvo com sucesso!', PHP_EOL;
    
}


// FUNÇÃO DE CARREGAR ARQUIVO 
function carregarDeArquivo() {
    $json = file_get_contents('contatos.json');
    echo 'Carregado!', PHP_EOL;
    return json_decode($json, true);

}


/**
 * Valida os dados de um contato
 * 
 * @param string $nome
 * @param string $telefone
 * @return array<string>
 */

// FUNÇÃO PARA VALIDAR DADOS DO CONTATO
function validarDados($nome, $telefone) {
    $problemas = [];

    // Validar nome
    $tamanho_nome = mb_strlen($nome);
    if($tamanho_nome < 2) {
        $problemas []= 'Nome deve ter pelo menos 2 caracteres.';
        desenharLinha();
    } else if($tamanho_nome > 100) {
        $problemas []= 'Nome deve ter no máximo 100 caracteres.';
        desenharLinha();
    }

    // Validar telefone 
    $tamanho_telefone = mb_strlen($telefone);
    if($tamanho_telefone > 10) {
        $problemas []= 'Telefone deve ter no máximo 10 caracteres.';
        desenharLinha();
    }

    return $problemas;
}


// FUNÇÃO PARA DESENHAR LINHA
function desenharLinha() {
    echo str_repeat('-', 20), PHP_EOL;
}

?>