<?php
/**
 * @author Aleksandar Panic
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @since 1.0.0
 **/

namespace App\Drinks;


use App\Drink;

class Water extends Drink
{
    public function getName(): string
    {
        return 'Water';
    }
}