<?php


namespace App\Service;


class RandomNumberGenerator
{
    public function getRandomNumber() {
        $numbers = [50,60,70];
        shuffle($numbers);
        $number = array_pop($numbers);
        return $number;
    }
}