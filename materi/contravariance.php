<?php

use Data\AnimalFood;
use Data\Food;

require_once 'data/animal.php';
require_once 'data/food.php';
require_once 'data/animalshelter.php';


$catshelter = new Data\CatShelter();
$cat = $catshelter->adopt('Brino');
$cat->eat(new Food());



