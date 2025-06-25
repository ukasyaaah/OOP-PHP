<?php

class Product
{
    // Klo Private, cuma bisa akses di class ini,
    // Klo Protected, cuma bisa akses di class ini & turunannya
    // Klo Public bisa keduanya & dari manapun
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        //Pake this utk akses objek saat ini
        //Gunakan $this->namaProperti, bukan $this->$namaProperti
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}

class ProductLain extends Product{

    public function info()  {
        echo "Produk $this->name harganya $this->price";
    }
}
