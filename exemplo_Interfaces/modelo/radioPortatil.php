<?php

require_once("IRadio.php");

class RadioPortatil implements IRadio{

    private $cor;
    private $marca;


    //metodos
    public function ligarRadio(){
        echo "Rádio portatil ligado\n";

    }
    public function desligarRadio(){
        echo "Rádio portatil desligado\n";

    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }
}
