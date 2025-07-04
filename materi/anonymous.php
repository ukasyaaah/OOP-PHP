<?php

interface HelloWorld
{
    function hello(): void;
}

// Tambahkan parameter setelah kata class
$helloWorld = new class ('Ukhasyah') implements HelloWorld
{
    private string $name;
    function __construct(string $name)
    {
        $this->name = $name;
    }
    function hello(): void
    {
        echo "Hello $this->name";
    }
    // Jan lupa titik koma
};

$helloWorld->hello();
