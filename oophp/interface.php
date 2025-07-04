<?php

interface InfoProduk
{
    public function getInfoProduk();
}

abstract class Produk
{
    public $judul, $kategori;

    function __construct(string $kategori, string $judul)
    {
        $this->kategori = $kategori;
        $this->judul = $judul;
    }

    abstract function getLabel(): string;
}

class Food extends Produk implements InfoProduk
{
    public function __construct($kategori, $judul)
    {
        parent::__construct($kategori, $judul);
    }

    function getLabel(): string
    {
        return "$this->kategori : $this->judul" . PHP_EOL;
    }

    function getInfoProduk()
    {
        echo $this->getLabel();
    }
}
$food = new Food('Sayur', 'Wortel');
$food->getInfoProduk();
echo $food->getLabel();
