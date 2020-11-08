<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Editar Produto');

use App\Entity\Product;
//Validação do ID
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location: index.php?status=error');
    exit;
}

//Consulta produto
$obProduct = Product::getProduct($_GET['id']);

//Validação do produto
if (!$obProduct instanceof Product) {
    header('location: index.php?status=error');
    exit;
}



//VALIDAÇÃO DO POST
if (isset($_POST['name'], $_POST['description'], $_POST['value'])) {

    $obProduct->name    = $_POST['name'];
    $obProduct->description = $_POST['description'];
    $obProduct->value     = $_POST['value'];
    $obProduct->update();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/include/header.php';
include __DIR__ . '/include/form.php';
include __DIR__ . '/include/footer.php';
