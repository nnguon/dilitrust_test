<?php

namespace App\Controller\Document;

use App\Form\Document\DocumentFormType;
use App\Repository\Document\DocumentGateway;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class SendDocumentController extends AbstractController
{
    private DocumentGateway $documentGateway;

    public function __construct(DocumentGateway $documentGateway)
    {
        $this->documentGateway = $documentGateway;
    }

    #[Route('/send-document', name:"send_document")]
    public function sendDocument(Request $request): Response
    {

        $form = $this->createForm(DocumentFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->security->getUser();
            #$someNewFilename = ...

            $file = $form['file']->getData();
            dd($file);
            #$file->move($directory, $someNewFilename);
    
            dd("THNKA FOR UPLOADING");
        }


        return $this->render(
            'documents/send.document.html.twig', [
                'documentForm' => $form->createView(),
            ]        
        );
    }
}