<?php

namespace App;

abstract class Meal extends Item
{
    protected function getInitialPrice()
    {
        return rand(300, 600);
    }
}