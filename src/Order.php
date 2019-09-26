<?php

namespace App;

class Order
{
    protected $items = [];

    protected $invoice = null;

    protected $table = null;

    public function __construct(Table $table)
    {
        $this->table = $table;
        $this->echoText();
    }

    public function createInvoice(): Invoice
    {
        if (!$this->hasInvoice()) {
            $this->invoice = new Invoice($this);
        }

        return $this->invoice;
    }

    public function hasInvoice()
    {
        return $this->invoice !== null;
    }

    public function addItem(ItemInterface $item)
    {
        $this->items[] = $item;
    }

    /** @return Item[] */
    public function getItems(): array
    {
        return $this->items;
    }

    public function getTable(): Table
    {
        return $this->table;
    }

    public function getPrice(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }

        return $total;
    }

    protected function echoText()
    {
        $date =  date('d/m/Y H:i');
        $number = $this->table->getNumber();

        echo "Porudzbina: datum {$date} sto broj {$number}" . PHP_EOL;
    }
}