<?php

require_once "data/sama.php";
require_once "data/helper.php";

use Data\One\{Sama as SamaOne, Same, Samu};
use Helper\{function getHelp, const HELP};

$samaOne = new SamaOne();
$samaOne->sama1();

$same = new Same();
$same->same();

$samu = new Samu();
$samu->samu1();

getHelp();
echo HELP;
