<?php

    require_once("modelo/Hotel.php");
    
    
    class HotelEconomico extends Hotel {
    private $precoDiaria;

    public function __construct($nome, $endereco, $numQuartos, $precoDiaria) {
        
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->numQuartos = $numQuartos;
        $this->quartosDisponiveis = $numQuartos;

        
        $this->precoDiaria = $precoDiaria;
    }

    public function calcularCustoEstadia($dias, $quartos) {
        return $dias * $quartos * $this->precoDiaria;
    }

    public function detalhesHotel() {
        return "Hotel: {$this->nome}, Endereço: {$this->endereco}, Número de Quartos: {$this->numQuartos}, Quartos Disponíveis: {$this->quartosDisponiveis}, Preço da Diária: R$ {$this->precoDiaria}";
    }
}
