<?php

class Student
{
    public int $id;
    public string $name;
    public string $room;

    function __clone()
    {
        unset($this->id);
    }

    // Pas konversi ke string, akan return ini
    function __toString(): string
    {
        return "Student id:$this->id, Name: $this->name, Room: $this->room";
    }

    function __invoke(...$argu)
    {
        $join = join(',', $argu);
        echo "Invoke Students yg ini with $join" . PHP_EOL;
    }

    function __debugInfo() : array
    {
        echo "Thanks to Ukhasyah" . PHP_EOL;
        return [
            'id' => $this->id,
            'Nama' => $this->name,
            'Asrama' => $this->room,
            'Developer' => 'Ukhasyah',

        ];
    }
}
