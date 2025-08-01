<?php

abstract class Produg
{
    // Property
    public $judul, $kategori;


    // Constructor : method khusus yg akan dijalankan otomatis ketika instance sebuah class
    // variabel dalam parameter beda dengan properti global di class
    // bisa dikasih nilai default
    public function __construct(string $kategori, string $judul)
    {
        $this->judul = $judul;
        $this->kategori = $kategori;
    }

    abstract function getInfoProduk();

    // Method
    public function getInfo()
    {
        $inpo = "$this->kategori : $this->judul";
        return $inpo;
    }
}