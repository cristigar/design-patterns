<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Tests\Creational\Builder;

use DesignPatternsForHumans\Creational\Builder\Burger;
use DesignPatternsForHumans\Creational\Builder\BurgerBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testBurgerBuilderSelectsSize()
    {
        $builder = new BurgerBuilder();
        $builder->selectSize(1);

        static::assertEquals(1, $builder->getSize());
    }

    public function testBurgerBuilderAddsPeperoni()
    {
        $builder = new BurgerBuilder();
        $builder->addPepperoni();

        static::assertEquals(true, $builder->hasPepperoni());
    }

    public function testBurgerBuilderAddsLettuce()
    {
        $builder = new BurgerBuilder();
        $builder->addLettuce();

        static::assertEquals(true, $builder->hasLettuce());
    }

    public function testBurgerBuilderAddsCheese()
    {
        $builder = new BurgerBuilder();
        $builder->addCheese();

        static::assertEquals(true, $builder->hasCheese());
    }

    public function testBurgerBuilderAddsTomato()
    {
        $builder = new BurgerBuilder();
        $builder->addTomato();

        static::assertEquals(true, $builder->hasTomato());
    }

    public function testBurgerBuilderBuildsABurger()
    {
        $builder = new BurgerBuilder();
        $burger = $builder->build();

        static::assertInstanceOf(Burger::class, $burger);
    }

    public function testBurgerBuilderBuildsABurgerOfCertainSize()
    {
        $builder = new BurgerBuilder();
        $builder->selectSize(3);

        $burger = $builder->build();

        static::assertEquals(3, $burger->getSize());
    }

    public function testBurgerBuilderBuildsABurgerWithIngredients()
    {
        $builder = new BurgerBuilder();
        $builder->addPepperoni();
        $builder->addLettuce();
        $builder->addTomato();

        $burger = $builder->build();

        static::assertEquals(true, $burger->hasPepperoni());
        static::assertEquals(true, $burger->hasLettuce());
        static::assertEquals(false, $burger->hasCheese());
        static::assertEquals(true, $burger->hasTomato());
    }
}
