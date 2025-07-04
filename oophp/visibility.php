<?php
require_once 'produk.php';
// Film : Laut Bercerita | Leila S. Chudori - 379 halaman

class Buku extends Produk
{
    public $halaman;
    protected $penulis;

    // Getter
    public function getPenulis()
    {
        return strtoupper($this->penulis) . PHP_EOL;
    }

    public function __construct(string $kategori, string $judul, string $penulis, int $halaman)
    {
        parent::__construct($kategori, $judul);
        $this->penulis = $penulis;
        $this->halaman = $halaman;
    }

    public function getInfo()
    {
        echo  parent::getInfo() . " | $this->penulis - $this->halaman halaman" . PHP_EOL;
    }
}

class Film extends Produk
{
    public string $sutradara;
    public int $jam;

    public function __construct($kategori, string $judul, string $sutradara, int $jam)
    {
        parent::__construct($kategori, $judul);
        $this->sutradara = $sutradara;
        $this->jam = $jam;
    }

    function getInfo()
    {
        echo parent::getInfo() . " | $this->sutradara ~ $this->jam jam" . PHP_EOL;
    }
}


$buku = new Buku('Novel', 'Laut Bercerita', 'Leila S. Chudori', 379);
echo $buku->getInfo();
echo $buku->getPenulis();
echo $buku->penulis = 'laila'; // error krn protected


$film = new Film('Film', 'Nope', 'Jordan Peele', 2);
$film->getInfo();
echo $film->judul;
