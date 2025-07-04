<?php
namespace App\Produk;
class Film extends Produg
{
    public $sutradara;
    public $genre;

    function __construct($kategori, $judul, $sutradara, $genre)
    {
        $this->sutradara = $sutradara;
        $this->genre = $genre;
        parent::__construct($kategori, $judul);
    }
    function getInfoProduk()
    {

        echo $this->genre . ' ' . $this->getInfo() . ' ' . "By $this->sutradara" . PHP_EOL;
    }
}