<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Product;

$products = product::getProducts();



include __DIR__. '/include/style.php';
include __DIR__.'/include/header.php';
include __DIR__.'/include/list.php';
include __DIR__.'/include/footer.php';