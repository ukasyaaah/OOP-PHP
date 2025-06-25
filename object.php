<?php

require_once 'data/person.php';

// Utk membuat object gunakan new, bisa lebuh dari satu
$person = new Person();

// Manipulasi Properties 
$person->name = "Ukhasyah";
$person->address = "Semarang";
$person->country = null;

echo "Nama : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

var_dump($person); // Ukhasyah

$person2 = new Person();
var_dump($person2); // Jakarta