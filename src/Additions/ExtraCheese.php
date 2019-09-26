<?php

namespace App\Additions;

use App\AdditionDecorator;

class ExtraCheese extends AdditionDecorator
{
    public function getTypeName(): string
    {
        return 'extra cheese';
    }
}