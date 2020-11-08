<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Produto');

use App\Entity\Product;
use \App\Entity\Categorie;

$obProduct = new Product;
$categories = categorie::getcategories();

//VALIDAÇÃO DO POST
if(isset($_POST['name'],$_POST['description'],$_POST['value'])){

  $obProduct->name    = $_POST['name'];
  $obProduct->description = $_POST['description'];
  $obProduct->value     = $_POST['value'];
  $obProduct->register();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/include/header.php';
include __DIR__.'/include/form.php';
include __DIR__.'/include/footer.php';