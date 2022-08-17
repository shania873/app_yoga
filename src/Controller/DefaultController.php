<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    #[Route('/', name: 'index')]
    public function index(Request $request)
    {
        dd($request);
        return new Response('<h1>Hello World !</h1>');
    }

    #[Route('/blog', name: 'blog')]
    public function blog()
    {
        return new Response('<h1>Blog</h1>');
    }
}
