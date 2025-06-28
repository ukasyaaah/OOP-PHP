<?php

$match = [];
$result = preg_match_all(
    "/ukh|far|han/i",
    "Ukhasyah Zufar",
    $match
);

var_dump($result); // int(2)
var_dump($match);

// Akan di replace 
$hasil = preg_replace(
    "/pagi|siang|malam/i",
    "Datang",
    "Selamat pagi, Ukhasyah",
);
var_dump($hasil); // Selamat Datang, Ukhasyah

// Utk Motong String
$hasilsplit = preg_split(
    "/[\s,-]/", 
    "Ukhasyah Zufar Hani,Software-Engineer"
);
var_dump($hasilsplit);
