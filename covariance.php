<?php
require_once 'data/animal.php';
require_once 'data/animalshelter.php';
require_once 'data/library.php';
require_once 'data/book.php';

use Data\{Cat, CatShelter, NovelShelf};

$catShelter = new CatShelter();
$catt = $catShelter->adopt('Brino');
var_dump($catt);


$bookrent = new NovelShelf();
$book = $bookrent->rent('Laut Bercerita');
var_dump($book);
var_dump($book->name);
