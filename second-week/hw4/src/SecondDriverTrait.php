<?php

trait SecondDriverTrait
{
    private int $optionPrice = 100;

    public function getSecondDriverOptionPrice(): int
    {
        return $this->optionPrice;
    }
}
