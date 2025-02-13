<?php
class Produto
{
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $quantidade;
    private $categoria;

    // Construtor
    public function __construct($nome, $descricao, $preco, $quantidade, $categoria, $id = null)
    {
        $this->id = $id; // id pode ser opcional, caso não seja informado.
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->categoria = $categoria;
    }

    // Getter e Setter para ID
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    // Getter e Setter para Nome
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    // Getter e Setter para Descrição
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    // Getter e Setter para Preço
    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    // Getter e Setter para Quantidade
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    // Getter e Setter para Categoria
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    // Método para exibir o produto como string
    public function __toString()
    {
        return "Produto: {$this->nome}\nDescrição: {$this->descricao}\nPreço: {$this->preco}\nQuantidade: {$this->quantidade}\nCategoria: {$this->categoria}";
    }
}
