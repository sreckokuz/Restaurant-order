<?php
/**
 * @author Aleksandar Panic
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @since 1.0.0
 **/

namespace App\Meals;


use App\Meal;

class Pasta extends Meal
{
    public function getName(): string
    {
        return "Pasta {$this->getType()} ({$this->getPrice()})";
    }
}