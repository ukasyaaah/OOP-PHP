<?php

require_once 'data/category.php';

use Data\Category;

$category = new Category();
$category->setName('Juice');
$category->setExpensice(true);

var_dump($category);

echo "Category : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;