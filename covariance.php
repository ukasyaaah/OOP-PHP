<?php
require_once 'data/animal.php';
require_once 'data/animalshelter.php';
require_once 'data/library.php';
require_once 'data/book.php';
require_once 'data/food.php';

use Data\{NovelShelf, CatShelter, Food};



$catShelter = new CatShelter();
$catt = $catShelter->adopt('Brino');
$cat->eate(new Food());


$bookrent = new NovelShelf();
$book = $bookrent->rent('Laut Bercerita');
var_dump($book);
var_dump($book->name);
