<?php

class Buku extends Produg
{
    protected $halaman;
    protected $penulis;

    // Getter
    public function getPenulis()
    {
        return strtoupper($this->penulis) . PHP_EOL;
    }
    public function getHalaman()
    {
        return $this->halaman . PHP_EOL;
    }

    // Setter 
    function setPenulis($penulis)
    {
        if (is_string($penulis)) {
            $this->penulis = $penulis;
        } else {
            echo 'Masukkan Judul Penuliss!' . PHP_EOL;
        }
    }

    function setHalaman($halaman)
    {
        if (is_integer($halaman)) {
            $this->halaman = $halaman;
        } else {
            echo 'Masukkan Halaman Buku!' . PHP_EOL;
        }
    }

    public function __construct(string $kategori, string $judul, string $penulis, int $halaman)
    {
        parent::__construct($kategori, $judul);
        $this->penulis = $penulis;
        $this->halaman = $halaman;
    }

    public function getInfoProduk()
    {
        echo  parent::getInfo() . " | $this->penulis - $this->halaman halaman" . PHP_EOL;
    }
}
