<?php

namespace App;

interface ItemInterface
{
    public function getName(): string;
    public function getPrice(): float;
}