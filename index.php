<?php

require __DIR__.'/vendor/autoload.php';

use App\Entity\proCat;
use \App\Entity\Product;
use \App\Entity\Categorie;

$products = product::getProducts();
$idcategorie = proCat::getproCats();
$categories = Categorie::getcategories();


include __DIR__.'/include/header.php';
include __DIR__.'/include/list.php';
include __DIR__.'/include/footer.php';