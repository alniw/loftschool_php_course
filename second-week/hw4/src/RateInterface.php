<?php

interface RateInterface
{
    public function getBasePrice();

    public function getUsageMinutes();

    public function getDistance();
}
