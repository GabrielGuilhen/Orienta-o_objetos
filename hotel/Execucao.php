<?php

require_once("modelo/Hotel.php");
require_once("modelo/HotelEconomico.php");
require_once("modelo/HotelLuxo.php");

$hotelEconomico = new HotelEconomico("Pousada Simples", "Rua das Flores, 123", 20, 150);
$hotelLuxo = new HotelLuxo("Resort Premium", "Av. Beira Mar, 456", 50, ["Spa", "Piscina"], 300);

// Função para exibir o menu
function exibirMenu() {
    echo "\n===== Menu =====\n";
    echo "1. Ver detalhes do Hotel Econômico\n";
    echo "2. Ver detalhes do Hotel Luxo\n";
    echo "3. Reservar quarto no Hotel Econômico\n";
    echo "4. Reservar quarto no Hotel Luxo\n";
    echo "5. Calcular custo de estadia no Hotel Econômico\n";
    echo "6. Calcular custo de serviços no Hotel Luxo\n";
    echo "0. Sair\n";
    echo "================\n";
    echo "Escolha uma opção: ";
}

while (true) {
    exibirMenu();
    $opcao = readline();

    switch ($opcao) {
        case "1":
            echo $hotelEconomico->detalhesHotel() . "\n";
            break;
        case "2":
            echo $hotelLuxo->detalhesHotel() . "\n";
            break;
        case "3":
            echo "Quantos quartos deseja reservar? ";
            $quantidade = readline();
            echo $hotelEconomico->reservarQuarto($quantidade) . "\n";
            break;
        case "4":
            echo "Quantos quartos deseja reservar? ";
            $quantidade = readline();
            echo $hotelLuxo->reservarQuarto($quantidade) . "\n";
            break;
        case "5":
            echo "Quantos dias? ";
            $dias = readline();
            echo "Quantos quartos? ";
            $quartos = readline();
            echo "Custo total da estadia: R$ " . $hotelEconomico->calcularCustoEstadia($dias, $quartos) . "\n";
            break;
        case "6":
            echo "Quantos dias? ";
            $dias = readline();
            echo "Quantos quartos? ";
            $quartos = readline();
            echo "Custo total dos serviços: R$ " . $hotelLuxo->calcularCustoServicos($dias, $quartos) . "\n";
            break;
        case "0":
            echo "Saindo... Obrigado por usar o sistema!\n";
            exit;
        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }
    echo "\n"; 
}

?>
