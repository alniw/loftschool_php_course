<?php

class BaseRate extends AbstractRate
{
    public function __construct(int $distance, int $minutes)
    {
        $pricePerKilometer = 10;
        $pricePerMinute = 3;
        parent::__construct($distance, $minutes, $pricePerKilometer, $pricePerMinute);
    }
}
