<?php

// Film : Laut Bercerita | Leila S. Chudori - 379 halaman
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

$buku = new Buku('Novel', 'Daun yang Jatuh Tak Pernah Membenci Angin', 'Tere Liye', 264);
$film = new Film('Movie', '28 Years Later', 'Danny', 'Horror Thriller');

$cetak = new CetakInfoProduk();
$cetak->tambahProduk($buku);
$cetak->tambahProduk($film);
$cetak->cetak();
