<?php

namespace App\Repository\Document;

use App\Entity\Document\DocumentEntity;

Interface DocumentGateway
{

    public function findAll(): array;

    public function delete(string $uuid): void;
    
}
