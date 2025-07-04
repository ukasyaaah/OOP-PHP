<?php

class ContohStatic
{
    public static $angka = 1;

    public static function halo()
    {
        return "Halo" . self::$angka . PHP_EOL;
    }
}

echo ContohStatic::halo();
echo ContohStatic::$angka . PHP_EOL;
