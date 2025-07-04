<?php

function getGanjil(int $max): Iterator
{
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 == 0) : yield $i;
        endif;
    }
}

foreach(getGanjil(100) as $ang):
    echo "Ganjil $ang" . PHP_EOL;
endforeach;


/// Atau

function getNama()  {
    yield "Ukhasyah";
    yield "Zufar";
    yield "Hani";
}

foreach(getNama() as $nama){
    echo "Nama : $nama" . PHP_EOL;
}

// Key - Value
function getMateri()  {
    yield "Senin" => "HTML";
    yield "Selasa" => "CSS";
    yield "Rabu" => "JS";
    yield "Kamis" => "PHP";
    yield "Jumat" => "Laravel";
}

foreach(getMateri() as $hari => $materi){
    echo "Hari $hari, materinya $materi" . PHP_EOL;
}