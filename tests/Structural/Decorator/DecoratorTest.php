<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Tests\Structural\Decorator;

use DesignPatternsForHumans\Structural\Decorator\Coffee;
use DesignPatternsForHumans\Structural\Decorator\MilkCoffee;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testCoffeeHasPrice()
    {
        $coffee = new Coffee(1000, 'Simple coffee');

        static::assertEquals(1000, $coffee->getPrice());
    }

    public function testCoffeeHasDescription()
    {
        $coffee = new Coffee(1000, 'Simple coffee');

        static::assertEquals('Simple coffee', $coffee->getDescription());
    }

    public function testMilkCoffeeCosts10PercentMore()
    {
        $someCoffee = new Coffee(1200, 'Some coffee');
        $milkCoffee = new MilkCoffee($someCoffee, 10, 'with milk');

        static::assertEquals(1320, $milkCoffee->getPrice());
    }

    public function testMilkCoffeeHasMilkInDescription()
    {
        $someCoffee = new Coffee(1200, 'Some coffee');
        $milkCoffee = new MilkCoffee($someCoffee, 10, 'with milk');

        static::assertEquals('Some coffee with milk', $milkCoffee->getDescription());
    }
}
