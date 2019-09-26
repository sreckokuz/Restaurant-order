<?php
/**
 * @author Aleksandar Panic
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @since 1.0.0
 **/

namespace App\Meals;

use App\AdditionDecorator;
use App\Singleton;
use App\Meal;

class MealFactory extends Singleton
{
    public function createPizza(string $type): Meal
    {
        return new Pizza($type);
    }

    public function createPasta(string $type): Meal
    {
        return new Pasta($type);
    }
}