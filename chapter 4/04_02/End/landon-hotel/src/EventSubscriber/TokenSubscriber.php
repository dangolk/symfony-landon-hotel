<?php


namespace App\EventSubscriber;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;

class TokenSubscriber implements EventSubscriberInterface
{

    public function beforeController()
    {
        //
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'beforeController'
        ];
    }

}