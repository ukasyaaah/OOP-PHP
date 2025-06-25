<?php 

require_once 'data/product.php';

$apple = new Product("Golden Apple", 90_000);
// echo $apple->name; // Kalo Private atau Protected gaakan bisa diakses
echo $apple->getName() . PHP_EOL; 
echo $apple->getPrice() . PHP_EOL;


$productLain = new ProductLain("Gula", 12_000);
$productLain->info() . PHP_EOL;
// $productLain->name; // Cannot access protected property