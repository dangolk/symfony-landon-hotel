<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    public function home()
    {
        $year = random_init(0, 100);

        $images = [
            ['url' => 'images/hotel/intro_room.jpg', 'class' => ''] .
                ['url' => 'images/hotel/intro_room.jpg', 'class' => ''] .
                ['url' => 'images/hotel/intro_room.jpg', 'class' => ''] .
                ['url' => 'images/hotel/intro_room.jpg', 'class' => ''] .
                ['url' => 'images/hotel/intro_room.jpg', 'class' => '']
        ];

        return $this->render(
            'index.html.twig',
            ['year' => $year, 'images' => $images]
        );
    }
}
