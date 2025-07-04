<?php

require_once 'Service/User.php';
require_once 'Produk/User.php';

spl_autoload_register(function ($class) {

    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Produk/' . $class . '.php';
});


spl_autoload_register(function ($class) {

    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php';
});
