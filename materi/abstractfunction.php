<?php
require_once 'data/animal.php';

use Data\{Animal, Cat};

$cat = new Cat();
$cat->name = "Brino";
$cat->run();