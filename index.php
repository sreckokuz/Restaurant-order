<?php

use App\Additions\ExtraCheese;
use App\Additions\Ketchup;
use App\Additions\Oregano;
use App\Drinks\DrinkFactory;
use App\Meals\MealFactory;
use App\Table;

require_once __DIR__ . '/vendor/autoload.php';

$tableOne = new Table(1);
$orderOne = $tableOne->newOrder();
$orderOne->addItem(Oregano::decorate(Ketchup::decorate(MealFactory::getInstance()->createPizza('Capricciosa'))));
$orderOne->addItem(ExtraCheese::decorate(MealFactory::getInstance()->createPasta('Italiana')));
$orderOne->addItem(DrinkFactory::getInstance()->createCarbonated('Coca Cola', 0.5));
$orderOne->addItem(DrinkFactory::getInstance()->createCarbonated('Coca Cola', 0.5));


$tableTwo = new Table(2);
$orderTwo = $tableTwo->newOrder();
$orderTwo->addItem(MealFactory::getInstance()->createPizza('Siciliana'));
$orderTwo->addItem(MealFactory::getInstance()->createPasta('Carbonara'));
$orderTwo->addItem(DrinkFactory::getInstance()->createNonCarbonated('Negazirani sok', 0.25));

$tableThree = new Table(3);
$orderThree = $tableThree->newOrder();
$orderThree->addItem(Ketchup::decorate(MealFactory::getInstance()->createPizza('Capricciosa')));
$orderThree->addItem(Ketchup::decorate(MealFactory::getInstance()->createPizza('Capricciosa')));
$orderThree->addItem(MealFactory::getInstance()->createPizza('Capricciosa'));
$orderThree->addItem(DrinkFactory::getInstance()->createCarbonated('Gazirani sok', 0.3));
$orderThree->addItem(DrinkFactory::getInstance()->createNonCarbonated('Negazirani sok', 0.5));
$orderThree->addItem(DrinkFactory::getInstance()->createWater(0.2));

$orderOne->createInvoice();
$orderThree->createInvoice();

try {
    $tableTwo->newOrder()->addItem(MealFactory::getInstance()->createPizza('Capricciosa'));
} catch (\Exception $e) {
    echo "Izuzetak se desio: " . $e->getMessage() . PHP_EOL;
}

$orderTwo->createInvoice();
$newOrderTwo = $tableTwo->newOrder();
$newOrderTwo->addItem(MealFactory::getInstance()->createPizza('Capricciosa'));



//
//
//interface CarService {
//    public function getPrice();
//    public function getDescription();
//}
//
//class BasicInspetion implements CarService {
//
//    public function getPrice()
//    {
//        return 50;
//    }
//
//    public function getDescription()
//    {
//       return "Basic inspection";
//    }
//}
//
//class OilChange implements CarService {
//    private $item;
//    public function __construct(CarService $item)
//    {
//        $this->item = $item;
//    }
//
//    public function getPrice()
//    {
//        return 50 + $this->item->getPrice();
//    }
//
//    public function getDescription()
//    {
//        return $this->item->getDescription() . 'and Oil change';
//    }
//}
//
//class TireRotation implements CarService {
//    protected $item;
//    public function __construct(CarService $item)
//    {
//        $this->item = $item;
//    }
//
//    public function getPrice()
//    {
//        return 50 + $this->item->getPrice();
//    }
//
//    public function getDescription()
//    {
//        return $this->item->getDescription() . ' and tire rotation';
//    }
//}
//
//echo (new TireRotation(new BasicInspetion()))->getDescription();
//echo (new OilChange(new BasicInspetion()))->getPrice();