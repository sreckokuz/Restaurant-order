<?php

namespace App;

class Invoice
{
    /** @var Order */
    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
        $this->echoText();
    }

    protected function echoText()
    {
        $price = $this->order->getPrice();
        $date = date('d/m/Y H:i');
        $number = $this->order->getTable()->getNumber();

        echo "Racun: datum {$date} sto broj {$number}, naplata {$price}rsd" . PHP_EOL;

        foreach ($this->order->getItems() as $item) {
            echo "\t" . $item->getName() . ', ' . $item->getPrice() . 'rsd' . PHP_EOL;
        }
    }
}