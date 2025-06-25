<?php

require_once 'data/asrama.php';

use asrama\{Musyrif, KetuaKamar};

$musrip = new Musyrif();
$musrip->namaMusrip = "Mas Evan";
$musrip->salam("Fauzan");

$ketua = new KetuaKamar();
$ketua->namaKetua = "Mas Fikri";
$ketua->namaMusrip = "Mas Evan";

$ketua->salam("Nak Kamar");
$ketua->getSalamFromMusyrif();
