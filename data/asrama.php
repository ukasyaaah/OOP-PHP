<?php

namespace asrama;

class Musyrif
{
    public string $namaMusrip = "Mas Evan";
    public string $title;

    public function __construct(string $name = "", string $title = "Musyrif")
    {
        $this->namaMusrip = $name;
        $this->title = $title;
    }
    // buat ngasih tau klo funct ini ga ngembaliin nilai
    function salam(string $name): void
    {
        echo "Assalamualaikum $name, aku $this->namaMusrip, musyrif mu" . PHP_EOL;
    }
}

class KetuaKamar extends Musyrif
{
    public $namaKetua;

    public function __construct(string $name)
    {
        $this->namaKetua = $name;
        parent::__construct($name, "Rois");
    }
    function salam(string $name): void
    {
        echo "Assalamualaikum $name, aku $this->namaKetua, ketua kamar mu" . PHP_EOL;
    }

    public function getSalamFromMusyrif()
    {
        // Parent utk akses class parentnya
        parent::salam($this->namaKetua);
    }
}
