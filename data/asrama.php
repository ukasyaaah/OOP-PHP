<?php

namespace asrama;

class Musyrif
{
    public string $namaMusrip = "Mas Evan";
    // buat ngasih tau klo funct ini ga ngembaliin nilai
    function salam(string $name): void
    {
        echo "Assalamualaikum $name, aku $this->namaMusrip, musyrif mu" . PHP_EOL;
    }
}

class KetuaKamar extends Musyrif
{
    public $namaKetua;
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
