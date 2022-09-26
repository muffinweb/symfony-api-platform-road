<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HelloController extends AbstractController
{
    #[Route('/hello/{?id=2}')]
    public function world(): Response
    {
        return $this->render('hello.html.twig', [
            'user' => 'muffinweb'
        ]);
    }
}