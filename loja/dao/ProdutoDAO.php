<?php
require_once 'Produto.php';
require_once 'Database.php';

class ProdutoDAO {
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    // Inserir um novo produto
    public function inserir(Produto $produto) {
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
    }

    // Listar todos os produtos
    public function listar() {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Buscar um produto por ID
    public function buscarPorId($id) {
        $sql = "SELECT * FROM produtos WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Excluir um produto por ID
    public function excluir($id) {
        $sql = "DELETE FROM produtos WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
}
?>
