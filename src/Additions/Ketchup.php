<?php

namespace App\Additions;

use App\AdditionDecorator;

class Ketchup extends AdditionDecorator
{
    public function getTypeName(): string
    {
        return 'ketchup';
    }
}