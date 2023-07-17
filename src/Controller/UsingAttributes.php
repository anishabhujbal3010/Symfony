<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsingAttributes extends AbstractController
{
    #[Route('/blog', name: 'blog_list')]
    public function list(): Response
    {
        $content = 'Hello, this is the blog list page.';
        return new Response($content);
    }
}

