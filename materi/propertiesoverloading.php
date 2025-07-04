<?php

class Zero
{
    private array $properties = [];

    // akses properti yang tidak terdefinisi atau tidak dapat diakses langsung
    function __get($name)
    {
        if (isset($this->properties[$name])) {
            return $this->properties[$name] . PHP_EOL;
        } else {
            return "Properti $name gada" . PHP_EOL;
        }
    }

    // Menetapkan properti yang tidak terdefinisi atau tidak dapat diakses langsung
    function __set($name, $value)
    {
        $this->properties[$name] = $value;
        echo "$name dengan value $value berhasil di set" . PHP_EOL;
    }

    // Dipanggil saat mengecek properti yang tidak tersedia menggunakan isset() atau empty()
    function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    // Dipanggil saat menghapus properti yang tidak tersedia atau tidak dapat diakses
    function __unset($name)
    {
        if (isset($this->properties[$name])) {
            echo "Berhasil $name dihapus" . PHP_EOL;
            unset($this->properties['$name']);
        } else {
            echo "Gada properti yg namanya $name" . PHP_EOL;
        }
    }

    function __call($name, $arguments)
    {
        if (count($arguments) > 0) {
            $join = join(',', $arguments);
            echo "Function $name dgn argumen $join ga tersedia" . PHP_EOL;
        } else {
            echo "Function $name ga tersedia" . PHP_EOL;
        }
    }

    public static function __callStatic($name, $arguments)
    {
        if (count($arguments) > 0) {
            $join = join(',', $arguments);
            echo "Static function $name dgn argumen $join ga tersedia" . PHP_EOL;
        } else {
            echo "Static function $name ga tersedia" . PHP_EOL;
        }
    }
}

$zero = new Zero();
$zero->name = 'halo';
echo $zero->name;
unset($zero->ky);

var_dump(isset($zero->name));
var_dump(isset($zero->k));


$zero->Kyu();
