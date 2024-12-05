<?php

require_once("Produto.php");

class Computador extends Produto{

    private $processador;
    private $memoria;

    public function getDados(){
        echo "Computador - " . parent :: getDados() . "\nProcessador:" . $this->processador. "\n";
    }

    public function getProcessador()
    {
        return $this->processador;
    }

    public function setProcessador($processador): self
    {
        $this->processador = $processador;

        return $this;
    }

    public function getMemoria()
    {
        return $this->memoria;
    }

    public function setMemoria($memoria): self
    {
        $this->memoria = $memoria;

        return $this;
    }
}