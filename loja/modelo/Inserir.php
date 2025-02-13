<?php
require_once 'classes/Produto.php';
require_once 'classes/ProdutoDAO.php';

echo "Nome: ";
$nome = readline();
echo "Descrição: ";
$descricao = readline();
echo "Preço: ";
$preco = readline();
echo "Quantidade: ";
$quantidade = readline();
echo "Categoria: ";
$categoria = readline();

$produto = new Produto($nome, $descricao, $preco, $quantidade, $categoria);
$dao = new ProdutoDAO();
$dao->inserir($produto);

echo "Produto inserido com sucesso!\n";
?>
