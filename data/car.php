<?php

namespace Data;

interface Brand
{
    function getBrand(): string;
}

interface Maintenance
{
    function isMaintenance(): bool;
}

interface Car extends Brand
{
    // gaperlu tulis abstract krn defaulnya udh abstract
    function drive();
    function getTire();
}

class Avanza implements Car, Maintenance
{
    function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    function getBrand(): string
    {
        return "Toyota";
    }

    function isMaintenance(): bool
    {
        return true;
    }

    function getTire(): int
    {
        return 4;
    }
}
