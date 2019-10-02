<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Tests\Structural\Decorator;

use DesignPatternsForHumans\Structural\Decorator\SimpleCoffee;
use DesignPatternsForHumans\Structural\Decorator\CoffeeWhip;
use DesignPatternsForHumans\Structural\Decorator\MilkCoffee;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testMilkCoffeeCostsTenPercentMore()
    {
        $someCoffee = new SimpleCoffee(1200, 'Some coffee');
        $milkCoffee = new MilkCoffee($someCoffee, 10, 'with milk');

        static::assertEquals(1320, $milkCoffee->getPrice());
    }

    public function testMilkCoffeeHasMilkInDescription()
    {
        $someCoffee = new SimpleCoffee(1200, 'Some coffee');
        $milkCoffee = new MilkCoffee($someCoffee, 10, 'with milk');

        static::assertEquals('Some coffee with milk', $milkCoffee->getDescription());
    }

    public function testCoffeeWhipCostsFiveUnitsMore()
    {
        $someCoffee = new SimpleCoffee(1300, 'Some coffee');
        $coffeeWhip = new CoffeeWhip($someCoffee, 500, 'whip');

        static::assertEquals(1800, $coffeeWhip->getPrice());
    }

    public function testCoffeeWhipHasWhipInDescription()
    {
        $someCoffee = new SimpleCoffee(1300, 'Some coffee');
        $coffeeWhip = new CoffeeWhip($someCoffee, 300, 'whip');

        static::assertEquals('Some coffee whip', $coffeeWhip->getDescription());
    }
}
