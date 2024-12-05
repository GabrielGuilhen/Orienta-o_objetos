<?php

require_once("Produto.php");
class Balde extends Produto{

    private $capacidade;

    public function getDados(){
        echo "Balde - " . parent :: getDados() . "\ncapacidade: ". $this->capacidade . "\n";
    }


    public function getCapacidade()
    {
        return $this->capacidade;
    }


    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}