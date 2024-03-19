<?php
// 1) Dado o array abaixo, gere uma tabela HTML que represente os dados.

// 2) Adiciona, à tabela criada anteriormente, um rodapé que contenha o somatório do estoque 
// e a média dos preços dos produtos, nas respectivas colunas. Use heredoc na solução.

$produtos = [

    [
        'descricao' => 'Guaraná',
        'estoque' => '10',
        'preco' => 8.0
    ],

    [
        'descricao' => 'Coca-cola',
        'estoque' => '50',
        'preco' => 9.50
    ],

    [
        'descricao' => 'Mineirinho',
        'estoque' => '25',
        'preco' => 8.50
    ],

];

// Nowdoc => não aceita variáveis 
echo <<<'HTML'
    <table>
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Estoque</th>
                <th>Preço</th>
            <tr>
        </thead>
    </tbody>

HTML;

// ----------- Solução --------------

$somatorioEstoque = 0;
$somatorioPreco = 0;

foreach($produtos as $p) {

    $somatorioEstoque = $somatorioEstoque + $p['estoque'];
    $somatorioPreco = $somatorioPreco + $p['preco'];

    echo <<<LINHA

        <tr>
            <td>$p[descricao]</td>
            <td>$p[estoque]</td>
            <td>$p[preco]</td>
        </tr>

    LINHA;

}


$media = $somatorioPreco / count($produtos);

echo <<<HTML

    </tbody>
    <tfoot>
        <td></td>
        <td>$somatorioEstoque</td>
        <td>$media</td>
    </tfoot>
</table>

HTML;

?>