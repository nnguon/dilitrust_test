<?php

namespace App\Repository\Document;

use App\Entity\Document\DocumentEntity;

class DocumentRepository implements DocumentGateway
{

    public function __construct()
    {
        
    }

    public function findAll(): array
    {
        return [new DocumentEntity('testName', 'testFormat', 'testContent', 'testUuid')];
    }

    public function delete(string $uuid): void
    {
        return;
    }
}
