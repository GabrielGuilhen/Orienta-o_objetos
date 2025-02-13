<?php
require_once 'classes/ProdutoDAO.php';

$dao = new ProdutoDAO();
$produtos = $dao->listar();

foreach ($produtos as $produto) {
    echo "ID: " . $produto['id'] . "\n";
    echo "Nome: " . $produto['nome'] . "\n";
    echo "Descrição: " . $produto['descricao'] . "\n";
    echo "Preço: " . $produto['preco'] . "\n";
    echo "Quantidade: " . $produto['quantidade'] . "\n";
    echo "Categoria: " . $produto['categoria'] . "\n";
    echo "----------------------------\n";
}
?>
