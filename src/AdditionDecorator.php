<?php

namespace App;

abstract class AdditionDecorator implements ItemInterface
{
    protected $item;

    public function __construct(ItemInterface $item)
    {
        $this->item = $item;
        $this->initialize();
    }

    public static function decorate(ItemInterface $item)
    {
        return new static($item);
    }

    public function getPrice(): float
    {
        return $this->item->getPrice() + $this->getAdditionPrice();
    }

    protected $price = 0;

    public function getAdditionPrice(): float
    {
        return $this->price;
    }

    public function initialize()
    {
        $this->price = rand(20, 100);
    }

    public abstract function getTypeName(): string;

    public function getName(): string
    {
        return "{$this->getTypeName()} ({$this->getAdditionPrice()}rsd) + {$this->item->getName()}";
    }
}