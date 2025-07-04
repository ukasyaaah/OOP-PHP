<?php
require_once 'data/sama.php';
require_once 'data/helper.php';

//Import Nama Class Yg Sama (Alias)
use Data\One\Sama as SamaOne;
use Data\Two\Sama as SamaTwo;

// Import Funct
use function Helper\getHelp;

// Import Const
use const Helper\HELP;


// Bikin object dari namespace
$sama1 = new SamaOne();
$sama1->sama1();
$sama2 = new SamaTwo();
$sama2->sama2();

// Constant di Namespace
echo HELP . PHP_EOL;

// Funct di Namspace
getHelp();
