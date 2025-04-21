<?php

namespace ChauNm\SymfonyGreetingBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/greeting', name: 'greeting')]
class GreetingController
{
    public function __invoke(): Response
    {
        return new Response("Hello world!");
    }
}