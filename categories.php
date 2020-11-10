<?php

require __DIR__.'/vendor/autoload.php';

use App\Entity\Categorie;

$obCategorie = new Categorie;

//VALIDAÇÃO DO POST
if(isset($_POST['namec'])){

  $obCategorie->namec    = $_POST['namec'];
  $obCategorie->register();
  
  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/include/header.php';
include __DIR__.'/include/catRegister.php';
include __DIR__.'/include/footer.php';