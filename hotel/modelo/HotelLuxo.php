<?php

require_once("modelo/Hotel.php");


class HotelLuxo extends Hotel {
    private $servicosExtras;
    private $precoServico;

    public function __construct($nome, $endereco, $numQuartos, $servicosExtras, $precoServico) {
        
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->numQuartos = $numQuartos;
        $this->quartosDisponiveis = $numQuartos;

        
        $this->servicosExtras = $servicosExtras;
        $this->precoServico = $precoServico;
    }

    public function calcularCustoServicos($dias, $quartos) {
        return $dias * $quartos * $this->precoServico;
    }

    public function detalhesHotel() {
        $servicos = join(", ", $this->servicosExtras); 
        return "Hotel:" . $this->nome . ", Endereço:" .$this->endereco . ", Número de Quartos:" .$this->numQuartos . ", Quartos Disponíveis:" .  $this->quartosDisponiveis. ", Serviços Extras:" . $servicos . ", Preço por Serviço: R$" . $this->precoServico;
    }
} 