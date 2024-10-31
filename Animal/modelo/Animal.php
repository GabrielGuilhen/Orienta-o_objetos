<?php

class Animal
{

    protected $nome;
    protected $raca;

    public function getDados(){
        return "\nNome: " . $this->nome . "Raça: " . $this->raca;
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getRaca()
    {
        return $this->raca;
    }

    public function setRaca($raca): self
    {
        $this->raca = $raca;

        return $this;
    }
}
