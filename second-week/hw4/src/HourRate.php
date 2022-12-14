<?php

class HourRate extends AbstractRate
{
    public function __construct(int $distance, int $minutes)
    {
        $pricePerKilometer = 0;
        $pricePerMinute = 200 / 60;
        parent::__construct($distance, $minutes, $pricePerKilometer, $pricePerMinute);
        $this->minutes = $this->minutes - $this->minutes % 60 + 60;
    }
}
