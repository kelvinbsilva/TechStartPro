<?php

require __DIR__.'/vendor/autoload.php';

use App\Entity\Categorie;

$obCategorie = new Categorie;

//VALIDAÇÃO DO POST
if(isset($_POST['name'])){

  $obCategorie->name    = $_POST['name'];
  $obCategorie->register();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/include/header.php';
include __DIR__.'/include/catRegister.php';
include __DIR__.'/include/footer.php';