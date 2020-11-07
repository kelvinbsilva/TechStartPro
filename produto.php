<?php



class produto {
    public object $connect;
    public $dados;
    public $id;


    public function produtos() {
        $connection = new connection();
        $this->connect = $connection->conectar();

        $query_produtos = "SELECT id, name, description, value
        FROM product
        ORDER BY name DESC";

        $result_produtos = $this->connect->prepare($query_produtos);
        $result_produtos->execute();
        return $result_produtos->fetchAll();

    }
    public function cadProd() {
        $connection = new connection();
        $this->connect = $connection->conectar();

        $query_produtos = "INSERT INTO product 
       (name, description, value) VALUES 
       (:name, :description, :value)";

        $registerProduct = $this->connect->prepare($query_produtos);
        $registerProduct->bindParam(':name', $this->dados['name']);
        $registerProduct->bindParam(':description', $this->dados['description']);
        $registerProduct->bindParam(':value', $this->dados['value']);

        $registerProduct->execute();

        if($registerProduct->rowCount()) {
            echo "Cadastrado com sucesso ";
        } else {
            echo "Erro";
        }
    }
    public function edit() {
        $this->connect = $connection->conectar();
        $queryEdit = "SELECT id, name, description, value, 
        FROM product,
        WHERE id=:id";

        $result_edit = $this->connection->prepare($queryEdit);
        $result_edit = bindParam(':id', $this->id);
        $result_edit->execute();
        $return = $result_edit->fetch();
    }

}
