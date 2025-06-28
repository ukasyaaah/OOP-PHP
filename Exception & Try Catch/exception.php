<?php
require_once 'Exception & Try Catch/loginrequest.php';
require_once 'Exception & Try Catch/validation.php';
require_once 'Exception & Try Catch/validationexception.php';



$login = new LoginRequest();
$login->user = 'ds';
$login->pass = '';

try {
    LoginValidation($login);
} catch (CustomException | Exception $e) {
    echo "Error : {$e->getMessage()}" . PHP_EOL;
    var_dump($e->getTrace());

    echo $e->getTraceAsString() . PHP_EOL;
} finally {
    echo "Error ga Error tetep dipanggil";
}
