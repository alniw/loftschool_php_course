<?php

class StudentAbstractRate extends AbstractRate
{
    public function __construct(int $distance, int $minutes)
    {
        $pricePerKilometer = 4;
        $pricePerMinute = 1;
        parent::__construct($distance, $minutes, $pricePerKilometer, $pricePerMinute);
    }
}
