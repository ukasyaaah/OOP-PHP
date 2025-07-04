<?php
require_once 'data/developer.php';

$company = new Company();
$company->developer = new Developer('Ukhasyah');
$company->developer = new BackendDeveloper('Zufar');
$company->developer = new FrontendDeveloper('Hani');

sayHelloProgrammer(new BackendDeveloper('Hani'));
sayHelloProgrammer(new Developer('uksh'));
sayHelloProgrammer(new FrontendDeveloper("Zufar"));