<?php

require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");
require_once("modelo/Residencial.php");

do {
    echo "\n-----------MENU-----------\n";
    echo "1- Consumo Residencial\n";
    echo "2- Consumo Industrial\n";
    echo "3- Consumo Comercial\n";
    echo "0- Sair\n";
    $opcao = readline("Escolha a opção: ");

    switch ($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;

        case 1:
            $valorconsumido = readline("Informe o consumo diário: ");
            $consumo = new Residencial();
            $consumo->setConsumoDiario($valorconsumido);
            echo "Você gasta diariamente R$ " . $consumo->getValorFatura() . " \n";
            break;
        case 2:
            $valorconsumido = readline("Informe o consumo diário: ");
            $consumo = new Industrial();
            $consumo->setConsumoDiario($valorconsumido);
            echo "Você gasta diariamente R$ " . $consumo->getValorFatura() . " \n";
            break;

        case 3:
            $valorconsumido = readline("Informe o consumo diário: ");
            $consumo = new Comercial();
            $consumo->setConsumoComercial($valorconsumido);
            echo "Você gasta diariamente R$ " . $consumo->getValorFatura() . " \n";
            break;
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);
