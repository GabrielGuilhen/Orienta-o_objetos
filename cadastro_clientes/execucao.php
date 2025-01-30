<?php

require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");
require_once("dao/ClienteDAO.php");

/*require_once("util/Conexao.php");
$con = Conexao::getCon();
print_r($con); */

do {
    echo "\n\n----CADASTRO DE CLIENTES----\n";
    echo "1- Cadastrar Cliente PF\n";
    echo "2- Cadastrar Cliente PJ\n";
    echo "3- Listar Clientes\n";
    echo "4- Buscar Cliente\n";
    echo "5- Excluir Cliente\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: ");
    switch ($opcao) {
        case 1:
            $cliente = new ClientePF();
            $cliente->setNome(readline("Informe o nome: "));
            $cliente->setNomeSocial(readline("Informe o nome social: "));
            $cliente->setCpf(readline("Informe o CPF: "));
            $cliente->setEmail(readline("Informe o e-mail: "));

            $clienteDAO = new ClienteDAO();
            $clienteDAO->inserirCliente($cliente);
            echo "Cliente PF cadastrado com sucesso!\n\n";
            break;

        case 2:
            $cliente = new ClientePJ();
            $cliente->setRazaoSocial(readline("Informe a razao social:"));
            $cliente->setNomeSocial(readline("Informe o nome social:"));
            $cliente->setCnpj(readline("Informe o CNPJ: "));
            $cliente->setEmail(readline("Informe o e-mail: "));
            $clienteDAO=new ClienteDAO();
            $clienteDAO->inserirCliente($cliente);
            echo "Cliente PJ cadastrado com sucesso!\n\n";

            break;

        case 3:

            $clienteDAO=new ClienteDAO();
            $clientes = $clienteDAO->listarCliente();
            foreach ($clientes as $c) {
                echo $c;        
            }

            break;

        case 4:

            $id = readline("Informe o ID do cliente:");
            $clienteDAO = new ClienteDAO();
            $cliente = $clienteDAO->buscarPorId($id);
            if($cliente!=null){
                echo $cliente;
            }else{
                echo "Cliente não encontrado!";
            }

            break;

        case 5:

            $clienteDAO= new ClienteDAO();
            $clientes = $clienteDAO->listarCliente();
            foreach ($clientes as $c) {
                echo $c;
            }
            $id = readline("Informe o ID do cliente a ser excluído:");
            $clienteDAO->excluirCliente($id);
            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!";
    }
} while($opcao != 0);
