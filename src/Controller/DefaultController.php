<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(TranslatorInterface $translator): Response
    {
        $myMessage1 = $translator-> trans("Symfony is great !");
        return $this->render('default/index.html.twig', [
            'message1' => $myMessage1,
        ]);
    }
    
}
