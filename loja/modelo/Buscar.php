<?php
require_once 'classes/ProdutoDAO.php';

echo "Digite o ID do produto: ";
$id = readline();

$dao = new ProdutoDAO();
$produto = $dao->buscarPorId($id);

if ($produto) {
    echo "ID: " . $produto['id'] . "\n";
    echo "Nome: " . $produto['nome'] . "\n";
    echo "Descrição: " . $produto['descricao'] . "\n";
    echo "Preço: " . $produto['preco'] . "\n";
    echo "Quantidade: " . $produto['quantidade'] . "\n";
    echo "Categoria: " . $produto['categoria'] . "\n";
} else {
    echo "Produto não encontrado!\n";
}
?>
