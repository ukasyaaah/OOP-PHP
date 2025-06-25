<?php

require_once 'data/person.php';

// Utk membuat object gunakan new, bisa lebuh dari satu
$person = new Person();

// Manipulasi Properties 
$person->objectName = "Ukhasyah";
$person->address = "Semarang";
$person->country = null;

echo "Nama : $person->objectName" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;
echo $person->sayHi($person->objectName) . PHP_EOL;

var_dump($person); // Ukhasyah

$person2 = new Person();
$person2->sayHi(null); // Hi There, I'm Ukhasyah


