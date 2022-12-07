<?php

namespace App\UseCase\Document;

use App\Form\Document\DocumentFormType;
use App\Repository\Document\DocumentGateway;
use App\UseCase\Document\Command\SaveDocumentCommand;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class SaveDocument
{
    private DocumentGateway $documentGateway;

    public function __construct(DocumentGateway $documentGateway)
    {
        $this->documentGateway = $documentGateway;
    }

    public function __invoke(SaveDocumentCommand $command)
    {

    } 
}