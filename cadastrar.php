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

    <h1>Cadastro</h1>
    <a href="Listar.php">Listar</a><br><br>

    <form name ="cadPro" action= "" method="POST">
        <label>Nome: </label>
        <input type="text" name="name" placeholder="Produto" required><br><br>

        <label>Descrição: </label>
        <input type="text" name="description" placeholder="Descrição" required><br><br>

        <label>Valor: </label>
        <input type="text" name="value" placeholder="Preço" required><br><br>

        <input type="submit" value="cadastrar" name="send">

    </form>
    

    <?php
         require './produto.php';
         require './connection.php';

        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($dados['send'])) {
           $cadProduct = new produto();
           $cadProduct->dados = $dados;
           $msg = $cadProduct->cadProd();
           echo $msg;
        }

    ?>


</body>
</html>