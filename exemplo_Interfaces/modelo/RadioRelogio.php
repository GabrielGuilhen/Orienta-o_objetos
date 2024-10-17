<?php

require_once("IRadio.php");
require_once("IRelogio.php");

class RadioRelogio implements IRadio
{

    private $corTela;

    public function ligarRadio(){
    echo "Rádio relógio ligado\n";

    }
    public function desligarRadio(){
    echo "Rádio relógio desligado\n";

    }
    public function mostrarHoras(){
    echo date("H:m:s") . "\n";
    }


    public function getCorTela()
    {
        return $this->corTela;
    }

    public function setCorTela($corTela): self
    {
        $this->corTela = $corTela;

        return $this;
    }
}
