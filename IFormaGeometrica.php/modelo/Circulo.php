<?php

require_once("IFormaGeometrica.php");

class Circulo implements IFormaGeometrica{
    private $raio;

    public function getRaio()
    {
        return $this->raio;
    }

    public function setRaio($raio): self
    {
        $this->raio = $raio;

        return $this;
    }
    public function getArea(){

        return
        3.14*($this->raio*$this->raio);  
    }
    public function getDesenho(){
              return "
           O O O O 0 \n     
        O             O \n    
      O                 O \n  
     O                   O \n 
    O                     O\n 
     O                   O \n 
      O                 O  \n 
        O             O  \n   
           O O O O 0  \n      
        ";
    
        
    }
}
