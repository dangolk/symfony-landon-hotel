<?php


namespace App\Service;


class DateCalculator
{

    public function yearsDifference($year) {
        $curYear = date('Y');
        $diff = $curYear - $year;
        return $diff;
    }

}