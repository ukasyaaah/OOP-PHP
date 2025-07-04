<?php

require_once 'data/student.php';

$student1 = new Student();
$student1->id = 1;
$student1->name = 'Arsalan';
$student1->room = 'Yamamah';

$student2 = new Student();
$student2->id = 1;
$student2->name = 'Arsalan';
$student2->room = 'Yamamah';

// True, krn scr properti semua sama
var_dump($student1 == $student2);

/* 
False, krn walau properti semua sama, 
tpi dia objek yg berbeda
*/
var_dump($student1 === $student2);
