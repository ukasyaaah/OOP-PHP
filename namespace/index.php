<?php


require_once 'App/init.php';

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;



// $buku = new Buku('Novel', 'Daun yang Jatuh Tak Pernah Membenci Angin', 'Tere Liye', 264);
// $film = new Film('Movie', '28 Years Later', 'Danny', 'Horror Thriller');

// $cetak = new CetakInfoProduk();
// $cetak->tambahProduk($buku);
// $cetak->tambahProduk($film);
// $cetak->cetak();


new ServiceUser();
new ProdukUser();
