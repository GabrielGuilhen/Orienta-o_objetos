<?php

    require_once("IConsumidorEnergia.php");

    class Industrial implements IConsumidorEnergia{
        private float $consumoDiario;

    function getValorFatura()
    {
        $valorIndustrial = $this -> consumoDiario * 1.80;
        return $valorIndustrial;
    }

        public function getConsumoDiario(): float
        {
                return $this->consumoDiario;
        }

        public function setConsumoDiario(float $consumoDiario): self
        {
                $this->consumoDiario = $consumoDiario;

                return $this;
        }
    }
