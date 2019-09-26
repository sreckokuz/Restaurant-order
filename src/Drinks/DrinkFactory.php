<?php
/**
 * @author Aleksandar Panic
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @since 1.0.0
 **/

namespace App\Drinks;


use App\Drink;
use App\Singleton;

class DrinkFactory extends Singleton
{
    public function createWater(float $volume): Drink
    {
        return new Water('water', $volume);
    }

    public function createCarbonated(string $type, float $volume): Drink
    {
        return new Carbonated($type,$volume);
    }

    public function createNonCarbonated(string $type, float $volume): Drink
    {
        return new NonCarbonated($type, $volume);
    }
}