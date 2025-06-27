<?php

require_once 'data/student.php';

$student1 = new Student();
$student1->id = 1;
$student1->name = "Arsalan";
$student1->room = "Yamamah";

$student2 = clone $student1;

var_dump($student1);
var_dump($student2);