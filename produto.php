<?php



class produto {
    public object $connect;
    public $dados;

    public function produtos() {
        $connection = new connection();
        $this->connect = $connection->conectar();
        $query_produtos = "SELECT id, name, description, value
        FROM product
        ORDER BY name DESC";
        $result_produtos = $this->connect->prepare($query_produtos);
        $result_produtos->execute();
        return $result_produtos->fetchAll();
        var_dump($result_produtos);

    }
}
