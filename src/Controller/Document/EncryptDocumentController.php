<?php

namespace App\Controller\Document;

use App\Repository\Document\DocumentGateway;
use App\Entity\Document\DocumentEntity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EncryptDocumentController extends AbstractController
{

    private DocumentGateway $documentGateway;

    public function __construct(DocumentGateway $documentGateway)
    {
        $this->documentGateway = $documentGateway;
    }

    #[Route('/documents/{documentUuid}/encrypt', methods:["POST"])]
    public function getDocuments($documentUuid): Response
    {
        $this->documentGateway->encrypt($documentUuid);

        return new Response(
            "200: Deleted"
        );
    }
}