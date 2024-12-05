
<?php

class Produto{

    protected $descricao;
    protected $Unidade_Medida;

    public function getDados(){

        echo "Descrição:" . $this->descricao . "\nUnidade de Medida:" . $this->Unidade_Medida . "\n";
     
    }

    public function getDescricao()
    {
        return $this->descricao;
    }


    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }


    public function getUnidadeMedida()
    {
        return $this->Unidade_Medida;
    }


    public function setUnidadeMedida($Unidade_Medida): self
    {
        $this->Unidade_Medida = $Unidade_Medida;

        return $this;
    }


}
