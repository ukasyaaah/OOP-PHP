<?php
require_once 'data/person.php';

$org1 = new Person('Sobi', "Purworejo");
$org1->country = "Indonesia";
var_dump($org1);

$org1->sayHi(null);
echo "\n";
$org1->info() . PHP_EOL;
