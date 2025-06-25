<?php

class Musyrif
{

    var string $nama;
    // buat ngasih tau klo funct ini ga ngembaliin nilai
    function salam(string $name): void
    {
        echo "Assalamualaikum $name, aku $this->nama";
    }
}

class KetuaKamar extends Musyrif {}
