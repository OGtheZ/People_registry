<?php

namespace App;

class Registry
{
    private array $people = [];

    public function __construct(array $people = [])
    {
        foreach ($people as $person)
        {
            if ($person instanceof Person) $this->add($person);
        }
    }

    public function add(Person $person): void
    {
        $this->people[$person->getIDNumber()] = $person;
    }

    public function getPeople(): array
    {
        return $this->people;
    }

    public function searchForPerson(string $IDNumber): ?Person
    {
       if (array_key_exists($IDNumber, $this->people))
       {
           return $this->people[$IDNumber];
       } else {
           return null;
       }
    }

    public function removePerson($IDNumber): void
    {
        if (array_key_exists($IDNumber, $this->people))
        {
            unset($this->people[$IDNumber]);
        }
    }
}