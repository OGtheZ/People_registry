<?php

namespace App;

class Person
{
    private string $name;
    private string $surname;
    private string $IDNumber;
    private ?string $description;

    public function __construct(string $name, string $surname, string $IDNumber, ?string $description = null)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->IDNumber = $IDNumber;
        $this->description = $description;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }
    function getIDNumber(): string
    {
        return $this->IDNumber;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}