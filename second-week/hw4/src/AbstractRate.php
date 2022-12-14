<?php

abstract class AbstractRate implements RateInterface
{
    use OptionsTrait;
    protected $pricePerKilometer;
    protected $pricePerMinute;
    protected int $distance;
    protected int $minutes;
    protected array $options;

    public function __construct(int $distance, int $minutes, $pricePerKilometer, $pricePerTimeUnit)
    {
        $this->distance = $distance;
        $this->minutes = $minutes;
        $this->pricePerKilometer = $pricePerKilometer;
        $this->pricePerMinute = $pricePerTimeUnit;
    }

    public function getBasePrice()
    {
        return $this->pricePerKilometer * $this->distance + $this->pricePerMinute * $this->minutes;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }

    public function getUsageMinutes(): int
    {
        return $this->minutes;
    }
}
