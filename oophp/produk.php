<?php

class Produk
{
    // Property
    public $judul = 'Laut Bercerita',
        $penulis = 'Leila S Chudori';



    // Constructor : method khusus yg akan dijalankan otomatis ketika instance sebuah class
    // variabel dalam parameter beda dengan properti global di class
    // bisa dikasih nilai default
    public function __construct(string $judul, string $penulis)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }


    // Method
    public function sayHello()
    {

        // Pake this utk akses property di class yg sama
        echo "Hello $this->penulis";
    }

    public function getLabel() {}
}


$produk = new Produk(
    judul: 'Pulang',
    penulis: 'Tere Liye'
);

var_dump($produk) . PHP_EOL;

$produk->sayHello() . PHP_EOL;
