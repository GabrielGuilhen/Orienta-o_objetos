<?php

require_once("modelo/Produto.php");
require_once("dao/ProdutoDAO.php");

$dao = new ProdutoDAO();

echo "1. Inserir Produto\n";
echo "2. Listar Produtos\n";
echo "3. Buscar Produto por ID\n";
echo "4. Excluir Produto\n";
echo "Escolha uma opção: ";

$opcao = readline();

switch ($opcao) {
    case 1:
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
        $dao->inserir($produto);
        break;

    case 2:
        $produtoDAO = new ProdutoDAO();
        $produtos = $produtoDAO->listar();

        echo "---------------------------------\n";
        foreach ($produtos as $produto) {
            echo "ID: " . $produto->getId() . "\n";
            echo "Nome: " . $produto->getNome() . "\n";
            echo "Descrição: " . $produto->getDescricao() . "\n";
            echo "Preço: " . $produto->getPreco() . "\n";
            echo "Quantidade: " . $produto->getQuantidade() . "\n";
            echo "Categoria: " . $produto->getCategoria() . "\n";
            echo "---------------------------------\n";
        }
        break;

    case 3:
        $id = readline("Informe o ID do Produto: ");
        $produtoDAO = new ProdutoDAO();
        $produto = $produtoDAO->buscarPorId($id);

        if ($produto != null) {
            echo "ID: " . $produto->getId() . "\n";
            echo "Nome: " . $produto->getNome() . "\n";
            echo "Descrição: " . $produto->getDescricao() . "\n";
            echo "Preço: " . $produto->getPreco() . "\n";
            echo "Quantidade: " . $produto->getQuantidade() . "\n";
            echo "Categoria: " . $produto->getCategoria() . "\n";
        } else {
            echo "Produto não encontrado!\n";
        }
        break;

    case 4:
        $produtoDAO = new ProdutoDAO();
        $produtos = $produtoDAO->listar();

        echo "---------------------------------\n";
        foreach ($produtos as $produto) {
            echo "ID: " . $produto->getId() . "\n";
            echo "Nome: " . $produto->getNome() . "\n";
            echo "Descrição: " . $produto->getDescricao() . "\n";
            echo "Preço: " . $produto->getPreco() . "\n";
            echo "Quantidade: " . $produto->getQuantidade() . "\n";
            echo "Categoria: " . $produto->getCategoria() . "\n";
            echo "---------------------------------\n";
        }

        $id = readline("Informe o ID do produto a ser excluído: ");
        $produtoDAO->excluir($id);
        break;

    default:
        echo "Opção inválida!\n";
}
