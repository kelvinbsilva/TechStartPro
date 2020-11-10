<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Editar Produto');

use App\Entity\proCat;
use App\Entity\Product;

//Validação do ID
$obProduct = Product::getProduct($_GET['id']);
$obProcat = proCat::getprocat($_GET['id']);
$idcategorie = proCat::getproCats($_GET['id']);



//Validação do post
if(isset($_POST['excluir'])){

    $obProcat->deleteProcat();
    $obProduct->deleteProd();
    header('location: index.php?status=success');
    exit;
  }

include __DIR__ . '/include/header.php';
include __DIR__ . '/include/delete.php';
include __DIR__ . '/include/footer.php';
