<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends  AbstractController
{

    public function home()
    {
        return new Response(
            '<h1>My first Symfony page!</h1>'
        );
    }

}