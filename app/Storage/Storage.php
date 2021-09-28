<?php
namespace App\Storage;

interface Storage
{
    public function save(array $people): void;
    public function read(): array;
}