<?php
/**
 * @author Aleksandar Panic
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @since 1.0.0
 **/

namespace App\Meals;


use App\Meal;

class Pizza extends Meal
{
    public function getName(): string
    {
        return "Pizza {$this->getType()} ({$this->getPrice()})";
    }
}