<?php

require_once("Produto.php");

class Livro extends Produto{

    public function getDados(){
        echo "Livro - " . parent :: getDados() . " \n Autor:" . $this->autor. "\n";
    }

    private $autor;

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}