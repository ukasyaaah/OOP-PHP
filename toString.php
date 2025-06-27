<?php

require_once 'data/student.php';

$student1 = new Student();
$student1->id = 1;
$student1->name = 'Arsalan';
$student1->room = 'Yamamah';

echo $string = (string)$student1;
echo $student1;
