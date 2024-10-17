<?php

require_once("IFormaGeometrica.php");

class Quadrado implements IFormaGeometrica{

    private $lado;

    public function getArea(){
        return 
        $this->lado* $this->lado;

    }
    public function getDesenho(){
        return
         " ************
           *          * 
           *  Texto   * 
           *          * 
           ************ \n";
        
    }

    public function getLado()
    {
        return $this->lado;
    }

    public function setLado($lado): self
    {
        $this->lado = $lado;

        return $this;
    }
}
