<?php

class Hotel {
    protected $nome;
    protected $endereco;
    protected $numQuartos;
    protected $quartosDisponiveis;

    public function __construct($nome, $endereco, $numQuartos) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->numQuartos = $numQuartos;
        $this->quartosDisponiveis = $numQuartos; 
    }

    public function reservarQuarto($quantidade) {
        if ($this->quartosDisponiveis >= $quantidade) {
            $this->quartosDisponiveis -= $quantidade;
            return "$quantidade quarto(s) reservado(s) com sucesso.";
        } else {
            return "Não há quartos suficientes disponíveis.";
        }
    }

    public function detalhesHotel() {
        return "Hotel: {$this->nome}, Endereço: {$this->endereco}, Número de Quartos: {$this->numQuartos}, Quartos Disponíveis: {$this->quartosDisponiveis}";
    }
}
