<?php
require_once 'data/sama.php';
require_once 'data/helper.php';

// Untuk membuat alias gunakan as.

//Import Nama Class Yg Sama (Alias)
use Data\One\Sama as SamaOne;
use Data\Two\Sama as SamaTwo;

// Import Funct
use function Helper\getHelp as helpMe;

// Import Const
use const Helper\HELP as HELPING;

$sama1 = new SamaOne();
$sama2 =new SamaTwo();

helpMe();

echo HELPING;
