<?php
$array = [
    'Name' => 'Uksh',
    'Country' => 'Indonesia',
];

$object = (object) $array;
var_dump($object);
echo $object->Name . PHP_EOL;


echo $array['Name'] . PHP_EOL;
