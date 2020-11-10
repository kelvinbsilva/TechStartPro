<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Confirmar categoria');

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
use \App\Entity\Categorie;
use App\Entity\proCat;

$categories = categorie::getcategories();

$obProCat = new proCat;

//VALIDAÇÃO DO POST
if (isset($_POST['idproduct'], $_POST['idcategories'], $_POST['idc'])) {

    $obProCat->idproduct    = $_POST['idproduct'];
    $obProCat->idproduct    = $_POST['idc'];
    $obProCat->idcategories = $_POST['idcategories'];
    $obProCat->register();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/include/header.php';
include __DIR__ . '/include/productCat.php';
include __DIR__ . '/include/footer.php';
