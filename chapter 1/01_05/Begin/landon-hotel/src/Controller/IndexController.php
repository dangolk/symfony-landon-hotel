<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends  AbstractController
{
    /**
     * @Route("/")
     */
    public function home()
    {
        return new Response(
            '<h1>My first Symfony page!</h1>'
        );
    }

}