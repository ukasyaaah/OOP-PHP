<?php

class Person
{
    // Properties / Fields
    var string $objectName = "Ukhasyah";
    var string $address = "Jakarta";
    var ?string $country = null;

    function sayHi(?string $functName)
    {
        if (is_null($functName)) {
            // Gunakan this utk akses object saat ini
            echo "Hi There! I'm $this->objectName";
        } else {
            echo "Hi $functName!, It's $this->objectName";
        }
    }
}
