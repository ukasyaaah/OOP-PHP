<?php

require 'data/car.php';

use Data\Avanza;

$car = new Avanza();
$car->drive();
echo "Rodanya ada {$car->getTire()}" . PHP_EOL;
