<?php

namespace App\Storage;

use App\Person;
use Port\Csv\CsvReader;
use Port\Csv\CsvWriter;

class CSVStorage implements Storage
{
    private string $fileName;
    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function save(array $people): void
    {
        $writer = new CsvWriter();
        $writer->setStream(fopen($this->fileName, "w+"));
        foreach ($people as $person)
        {
            $writer->writeItem([$person->getName(), $person->getSurname(), $person->getIDNumber(),
                $person->getDescription()]);
        }
    }

    public function read(): array
    {
        $file = new \SplFileObject($this->fileName);
        $delimiter = ";";
        $reader = new CsvReader($file, $delimiter);
        $people = [];
        foreach ($reader as $record)
        {
            $people[] = new Person($record[0], $record[1], $record[2], $record[3]);
        }
        return $people;
    }
}