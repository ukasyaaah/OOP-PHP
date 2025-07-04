<?php

require_once 'App/init.php';

$buku = new Buku('Novel', 'Daun yang Jatuh Tak Pernah Membenci Angin', 'Tere Liye', 264);
$film = new Film('Movie', '28 Years Later', 'Danny', 'Horror Thriller');

$cetak = new CetakInfoProduk();
$cetak->tambahProduk($buku);
$cetak->tambahProduk($film);
$cetak->cetak();
