<?php

namespace App\Controller\Document;

use App\Repository\Document\DocumentGateway;
use App\Entity\Document\DocumentEntity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GetDocumentsController extends AbstractController
{

    private DocumentGateway $documentGateway;

    public function __construct(DocumentGateway $documentGateway)
    {
        $this->documentGateway = $documentGateway;
    }

    #[Route('/documents', name:"get_documents")]
    public function getDocuments(): Response
    {
        $documents = $this->documentGateway->findAll();

        
        foreach ($documents as $document) {
            $htmlResponse = sprintf("<li>uuid: %s, name: %s, format: %s, content: %s</li>", $document->uuid, $document->name, $document->format, $document->content);
        }

        return new Response(
            '<html><body><ul>' . $htmlResponse . '</ul></body></html>'
        );
    }
}