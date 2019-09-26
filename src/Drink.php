<?php

namespace App;

abstract class Drink extends Item
{
    protected $volume;

    public function getVolume(): float
    {
        return $this->volume;
    }

    public function __construct(string $type, float $volume)
    {
        $this->volume = $volume;
        parent::__construct($type);
    }

    protected function getInitialPrice()
    {
        return rand(150, 500);
    }
}