<?php


namespace App\Service;


use Psr\Log\LoggerInterface;

class RandomNumberGenerator
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function getRandomNumber() {
        $numbers = [50,60,70];
        shuffle($numbers);
        $number = array_pop($numbers);
        return $number;
    }
}