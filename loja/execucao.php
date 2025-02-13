<?php
require_once 'classes/ProdutoDAO.php';

$dao = new ProdutoDAO();

echo "1. Inserir Produto\n";
echo "2. Listar Produtos\n";
echo "3. Buscar Produto por ID\n";
echo "4. Excluir Produto\n";
echo "Escolha uma opção: ";

$opcao = readline();

switch ($opcao) {
    case 1:
        require 'inserir.php';
        break;
    case 2:
        require 'listar.php';
        break;
    case 3:
        require 'buscar.php';
        break;
    case 4:
        require 'excluir.php';
        break;
    default:
        echo "Opção inválida!\n";
}
?>
