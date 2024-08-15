<?php
    class Veiculo {
        private $capacidade;
        private $passagensVendidas;

        public function getCapacidade()
        {
                return $this->capacidade;
        }

        public function setCapacidade($capacidade): self
        {
                $this->capacidade = $capacidade;

                return $this;
        }

        public function getPassagensVendidas()
        {
                return $this->passagensVendidas;
        }

        public function setPassagensVendidas($passagensVendidas): self
        {
                $this->passagensVendidas = $passagensVendidas;

                return $this;
        }

        public function venderPassagem($quantidade)
        {
            if($quantidade > 0) {
                if ($this->passagensVendidas + $quantidade <= $this->capacidade) {
                    $this->passagensVendidas += $quantidade;
                    return true;
                }
            }
            return false;
        }
    }

    $onibus = new Veiculo();
    $onibus->setCapacidade(50);

    while (true) {
        $entrada = readline("Digite o número de passagens que deseja comprar (ou 0 para sair): ");
        $quantidade = (int)$entrada;

        if ($quantidade === 0) {
            echo "Saindo do programa...\n";
            break;
        }

        if ($onibus->venderPassagem($quantidade)) {
            echo "Passagem(s) vendida(s) com sucesso!\n";
        } else {
            echo "Não foi possível vender as passagens.\n";
        }

        echo "Passagens vendidas até agora: " . $onibus->getPassagensVendidas() . "\n";
        echo "Capacidade restante: " . ($onibus->getCapacidade() - $onibus->getPassagensVendidas()) . "\n";

    };
