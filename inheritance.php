<?php 
require_once 'data/asrama.php';


$musyrif = new Musyrif();
$musyrif->nama = "Epan";
$musyrif->salam("Hani");

echo "\n";

$ketua = new KetuaKamar();
$ketua->nama = "Pahri";
$ketua->salam("Fauzan");


