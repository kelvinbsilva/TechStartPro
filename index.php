<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Desafio Olist</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <h1>Listar produtos</h1>
    <a href="cadastrar.php">Cadastrar</a><br><br>

    <?php
    require './produto.php';
    require './connection.php';
    $produtos = new produto();
    $dados = $produtos->produtos();
    //var_dump($msg);
    foreach( $dados as $row_produto) {
        
        extract($row_produto);
        echo "ID: " . $id . "<br>";
        echo "NOME: " . $name ."<br>";
        echo "Descrição: " . $description . "<br>";
        echo "Valor: R$" . number_format($value, 2, ",", ".") . "<br>";
        echo "<a href='editar.php?id=" .$id . "'>Editar</a>";
        filter_input(INPUT_GET, "id");

        $editProduct = new product();
        $editProduct->id = $id;
        $resultEdit = $editProduct->edit();

        
    }
    ?>


</body>
</html>