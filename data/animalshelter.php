<?php

namespace Data;

interface AnimalShelter
{
    function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{
    function adopt(string $name): Cat // <- INI COVARIANCE
    {

        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}
