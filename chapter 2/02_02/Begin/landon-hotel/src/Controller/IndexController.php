<?php


namespace App\Controller;

use App\Service\RandomNumberGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use App\Service\RandomNumberGenerator;

class IndexController extends  AbstractController
{
    /**
     * @Route("/")
     */
    public function home(LoggerInterface $logger, RandomNumberGenerator $rdn)
    {
        $year = random_int(0,100);

        $logger->info('Homepage loaded');

        $year 

        $images = [
            ['url' => 'images/hotel/intro_room.jpg', 'class' => ''],
            ['url' => 'images/hotel/intro_pool.jpg', 'class' => ''],
            ['url' => 'images/hotel/intro_dining.jpg', 'class' => ''],
            ['url' => 'images/hotel/intro_attractions.jpg', 'class' => ''],
            ['url' => 'images/hotel/intro_wedding.jpg', 'class' => 'hidesm']
        ];

        return $this->render('index.html.twig',
            ['year' => $year, 'images' => $images]
        );
    }

}