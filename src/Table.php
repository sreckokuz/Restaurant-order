<?php

namespace App;

class Table
{
    protected $number;

    /** @var Order[] */
    protected $orders = [];

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function newOrder(): Order
    {
        foreach ($this->orders as $order) {
            if (!$order->hasInvoice()) {
                throw new \Exception('Nije moguce izdati novu porudzbinu jer prethodna nije naplacena.');
            }
        }

        return $this->orders[] = new Order($this);
    }

    public function getNumber(): int
    {
        return $this->number;
    }
}