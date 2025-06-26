<?php

require_once 'data/asrama.php';

use asrama\{Musyrif, KetuaKamar,};

$musrip = new Musyrif('Mas Evan', 'Musyrif');
// $musrip->namaMusrip = "Mas Evan";
$musrip->salam("Fauzan");

$ketua = new KetuaKamar('wkwkw');
// $ketua->namaKetua = "Mas Fikri";
$ketua->namaMusrip = "Mas Evan";
echo $ketua->title . PHP_EOL;

echo <<< HALO
Hallo, aku $ketua->namaKetua, 
aku adalah $ketua->title di kamar ini,
kamar ini dibimbing oleh $ketua->namaMusrip, 
dia adalah $musrip->title kita. 
HALO . PHP_EOL;


$ketua->salam("Nak Kamar");
$ketua->getSalamFromMusyrif();
