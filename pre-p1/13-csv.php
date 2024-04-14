<?php

// Função para ordenar os produtos pelo nome
function ordenarPorNome($a, $b) {
    return strcmp($a['Produto'], $b['Produto']);
}

// Ler o conteúdo do arquivo CSV
$linhas = array_map('str_getcsv', file('produtos.csv'));

// Remover o cabeçalho
$cabecalho = array_shift($linhas);

// Processar os dados do CSV
$produtos = [];
foreach ($linhas as $linha) {
    $produtos[] = [
        'Produto' => $linha[0],
        'Estoque' => $linha[1],
        'Preço' => $linha[2]
    ];
}

// Ordenar os produtos pelo nome
usort($produtos, 'ordenarPorNome');

// Gerar o conteúdo HTML
$html = <<<HTML
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Produtos</title>
</head>
<body>

<table>
<thead>
<tr>
<th>Produto</th>
<th>Estoque</th>
<th>Preço</th>
</tr>
</thead>
<tbody>
HTML;

foreach ($produtos as $produto) {
    $html .= "<tr>";
    $html .= "<td>{$produto['Produto']}</td>";
    $html .= "<td>{$produto['Estoque']}</td>";
    $html .= "<td>{$produto['Preço']}</td>";
    $html .= "</tr>";
}

$html .= <<<HTML
</tbody>
</table>

</body>
</html>
HTML;

// Salvar o conteúdo HTML em um arquivo
file_put_contents('produtos.html', $html);

echo "Arquivo 'produtos.html' gerado com sucesso!";
?>