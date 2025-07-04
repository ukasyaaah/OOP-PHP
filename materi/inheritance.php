<?php
require_once 'data/asrama.php';

use asrama\{Musyrif, KetuaKamar};

$musyrif = new Musyrif();
$musyrif->namaMusrip = "Epan";
$musyrif->salam("Hani");

echo "\n";

$ketua = new KetuaKamar();
$ketua->namaKetua = "Pahri";
$ketua->salam("Fauzan");
