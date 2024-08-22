<?php

class Produto
{
    private $descricao;
    private $unidadeMedida;
    private $quantidade;
    private $valorUnitario;

    public function getValorTotal()
    {

        return $this->quantidade * $this->valorUnitario;
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
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida($unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    public function setValorUnitario($valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}

//Criar os produtos

$produto1 = new Produto();
$produto1-> setDescricao (readline("\nDiga a descrição: \n"));
$produto1-> setUnidadeMedida(readline("Diga a unidade de medida:"));
$produto1-> setQuantidade (readline("Diga a quantidade:"));
$produto1-> setValorUnitario (readline("Diga o valor unitario:"));



$produto2 = new Produto();
$produto2-> setDescricao (readline("Diga a descrição:"));
$produto2-> setUnidadeMedida(readline("Diga a unidade de medida:"));
$produto2-> setQuantidade (readline("Diga a quantidade:"));
$produto2-> setValorUnitario (readline("Diga o valor unitario:"));




$produto3 = new Produto();
$produto3-> setDescricao (readline("Diga a descrição:"));
$produto3-> setUnidadeMedida(readline("Diga a unidade de medida:"));
$produto3-> setQuantidade (readline("Diga a quantidade:"));
$produto3-> setValorUnitario (readline("Diga o valor unitario:"));

echo "Produto " . $produto1->getDescricao() . $produto1->getUnidadeMedida() . " | " . $produto1->getQuantidade() . "x" . $produto1->getValorUnitario() . "=" . $produto1->getValorTotal() . "\n";

echo "Produto " . $produto2->getDescricao() . $produto2->getUnidadeMedida() . " | " . $produto2->getQuantidade() . "x" . $produto2->getValorUnitario() . "=" . $produto2->getValorTotal(). "\n";

echo "Produto " . $produto3->getDescricao() . $produto3->getUnidadeMedida() . " | " . $produto3->getQuantidade() . "x" . $produto3->getValorUnitario() . "=" . $produto3->getValorTotal() . "\n";

if ($produto1->getValorTotal() > $produto2->getValorTotal() and $produto3->getValorTotal()) {
   echo 'Venda com o maior valor total do produto:'. $produto1->getDescricao(). $produto1->getUnidadeMedida();
}
elseif ($produto2->getValorTotal() > $produto3->getValorTotal() and $produto1->getValorTotal()) {
    echo 'Venda com o maior valor total do produto:'. $produto2->getDescricao(). $produto2->getUnidadeMedida();    
}
elseif($produto3->getValorTotal()  >$produto2->getValorTotal()  and $produto1->getValorTotal() ) {
    echo 'Venda com o maior valor total do produto:'. $produto3->getDescricao(). $produto3->getUnidadeMedida();  
}
