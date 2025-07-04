<?php

class CetakInfoProduk
{
    public $daftar = [];

    function tambahProduk(Produg $produk)
    {
        // Menambah elemen baru pada array
        $this->daftar[] = $produk;
    }
    function cetak()
    {
        $str = "Daftar Produk : <br>";

        foreach ($this->daftar as $produk) {
            $str .= "- {$produk->getInfoProduk()} <br>";
        }

    }
}