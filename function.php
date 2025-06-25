<?php
require_once 'data/person.php';

$org1 = new Person();
$org1->objectName = "Mul";
$org1->address = "Batam";

$org1->sayHi(null);
echo "\n";
$org1->info() . PHP_EOL;
