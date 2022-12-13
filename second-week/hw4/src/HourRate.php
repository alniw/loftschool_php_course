<?php

class HourRate extends AbstractRate
{

    public function __construct(int $distance, int $minutes)
    {
        $pricePerKilometer = 0;
        $pricePerHour = 200;
        parent::__construct($distance, $minutes, $pricePerKilometer, $pricePerHour);
        $hours = ceil($this->getUsageMinutes() / 60);
        $this->time = $hours;
    }
}
