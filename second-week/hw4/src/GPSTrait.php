<?php

trait GPSTrait
{
    public function getGpsOptionPrice(RateInterface $rate, $pricePerHour)
    {
        $hours = ceil($rate->getUsageMinutes() / 60);

        return $pricePerHour * $hours;
    }
}
