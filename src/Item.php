<?php

namespace App;

abstract class Item implements ItemInterface
{
    protected $price;
    protected $type;

    public function __construct(string $type)
    {
        $this->price = $this->getInitialPrice();
        $this->type = $type;
    }

    protected abstract function getInitialPrice();

    protected function getType()
    {
        return $this->type;
    }

    public abstract function getName(): string;

    public function getPrice(): float
    {
        return $this->price;
    }

}