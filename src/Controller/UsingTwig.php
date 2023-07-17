<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsingTwig extends AbstractController 
{
    #[Route('/twig/random/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('twig/random/number.html.twig', [
            'number' => $number,
        ]);
    }
}
