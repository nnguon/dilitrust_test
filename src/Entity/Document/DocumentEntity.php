<?php

namespace App\Entity\Document;

class DocumentEntity
{
    public ?int $id;

    public int $userId;

    public string $name;

    public function __construct(string $name, int $userId)
    {
        $this->name = $name;
        $this->userId = $userId;
    }
}
