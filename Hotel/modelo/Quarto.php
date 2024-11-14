<?php

class Quarto{

    protected $numero;
    protected $capacidade;

    public function exibir_info(){
  
    }
  
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
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
