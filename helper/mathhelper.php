<?php
// Materi Static
namespace Helper;

class MathHelper
{
    static public string $name = "MathHelper" . PHP_EOL;

    const CHANGELESS = "Fauzan";

    static public function sum(int ...$numbers): int
    {

        $total = 0;
        foreach ($numbers as $num) {
            $total += $num;
        }
        return $total;
    }
}

// Cara aksesnya
// NamaClass::$properties;

// Gnakan titik 2 ::
echo MathHelper::$name;


// Mengubah Data
MathHelper::$name = "Ukhasyah";

echo MathHelper::$name . PHP_EOL;

// AKSES CONSTANT
echo MathHelper::CHANGELESS . PHP_EOL;

// Akses Static function
echo MathHelper::sum(20, 20, 20) . PHP_EOL;
