<?php

require_once 'data/trait.php';

use Data\{Person};



$andi = new Person();

// Name dari trait HasName
$andi->name = "Andi Husky";
$andi->run();
$andi->goodBye();
var_dump($andi);
