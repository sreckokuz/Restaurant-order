<?php

namespace App\Additions;

use App\AdditionDecorator;

class Oregano extends AdditionDecorator
{
    public function getTypeName(): string
    {
        return 'oregano';
    }
}