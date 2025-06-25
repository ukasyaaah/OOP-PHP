<?php

class Person
{

    // Constant
    const DEV = "Ukhasyah";

    // Properties / Fields
    var string $objectName = "Ukhasyah";
    var string $address = "Jakarta";
    var ?string $country = null;

    /// Constructor
    function __construct(string $name, string $address)
    {
        $this->objectName = $name;
        $this->address = $address;
    }

    function sayHi(?string $functName)
    {
        if (is_null($functName)) {
            // Gunakan this utk akses object saat ini
            echo "Hi There! I'm $this->objectName";
        } else {
            echo "Hi $functName!, It's $this->objectName";
        }
    }

    function info()
    {
        echo "Developer :" . self::DEV;
    }

    function __destruct()
    {
        echo "Object Person $this->objectName will be destroyed";
    }
}
