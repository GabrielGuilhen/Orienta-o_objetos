<?php

require_once("modelo/Produto.php");
require_once("util/Conexao.php");

class ProdutoDAO
{
    private $conn;

    public function __construct()
    {
        $this->conn = Conexao::getCon();
    }

    public function inserir(Produto $produto)
    {
        $sql = "INSERT INTO produtos (nome, descricao, preco, quantidade, categoria)
                VALUES (:nome, :descricao, :preco, :quantidade, :categoria)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':nome' => $produto->getNome(),
            ':descricao' => $produto->getDescricao(),
            ':preco' => $produto->getPreco(),
            ':quantidade' => $produto->getQuantidade(),
            ':categoria' => $produto->getCategoria()
        ]);

        echo "Produto inserido com sucesso!\n";
    }

    public function listar()
    {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->conn->query($sql);
        $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $this->mapProdutos($produtos);
    }

    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM produtos WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        
        $produto = $stmt->fetch(PDO::FETCH_ASSOC);  
        
        
        return $produto ? $this->mapProdutos([$produto])[0] : null;
    }

    public function excluir($id)
    {
        $sql = "DELETE FROM produtos WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);

        echo "Produto excluído com sucesso!\n";
    }

    private function mapProdutos($resultado)
    {
        $produtos = [];
        foreach ($resultado as $linha) {
            $produto = new Produto(
                $linha['nome'], 
                $linha['descricao'], 
                $linha['preco'], 
                $linha['quantidade'], 
                $linha['categoria'], 
                $linha['id']
            );
            $produtos[] = $produto;
        }

        return $produtos; 
    }
}
?>
