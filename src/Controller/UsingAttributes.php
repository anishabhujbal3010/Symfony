<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsingAttributes extends AbstractController
{
   
    public function list(): Response
    {
        $content = 'Hello, this is the blog list page.';
        return new Response($content);
    }
  
    public function show(string $slug): Response
    {
    
        $content = sprintf('Showing blog post with slug: %s', $slug);

        return new Response($content);
    }
}
