<?php

namespace App\Controller\Document;

use App\Repository\Document\DocumentGateway;
use App\Entity\Document\DocumentEntity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DeleteDocumentController extends AbstractController
{

    private DocumentGateway $documentGateway;

    public function __construct(DocumentGateway $documentGateway)
    {
        $this->documentGateway = $documentGateway;
    }

    #[Route('/documents/{documentUuid}', methods:["DELETE"])]
    public function getDocuments($documentUuid): Response
    {
        
        $this->documentGateway->delete($documentUuid);

        return new Response(
            "200: Deleted"
        );
    }
}