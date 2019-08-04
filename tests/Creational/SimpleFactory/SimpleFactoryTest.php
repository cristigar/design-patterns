<?php
declare(strict_types=1);

namespace DesignPatternsForHumans\Tests\Creational\SimpleFactory;

use DesignPatternsForHumans\Creational\SimpleFactory\Door;
use DesignPatternsForHumans\Creational\SimpleFactory\DoorFactory;
use PHPUnit\Framework\TestCase;

/**
 * **Description**
 *
 * Consider, you are building a house and you need doors. You can either put on
 * your carpenter clothes, bring some wood, glue, nails and all the tools
 * required to build the door and start building it in your house or you can
 * simply call the factory and get the built door delivered to you so that you
 * don't need to learn anything about the door making or to deal with the mess
 * that comes with making it.
 *
 * **In plain words**
 *
 * Simple factory simply generates an instance for client without exposing any
 * instantiation logic to the client.
 *
 * **Wikipedia says**
 *
 * In object-oriented programming (OOP), a factory is an object for creating
 * other objects – formally a factory is a function or method that returns
 * objects of a varying prototype or class from some method call, which is
 * assumed to be "new".
 *
 * @see https://github.com/kamranahmedse/design-patterns-for-humans#-simple-factory
 */
class SimpleFactoryTest extends TestCase
{
    public function testMakesADoor()
    {
        $door = DoorFactory::makeDoor(10, 10);

        static::assertInstanceOf(Door::class, $door);
    }

    public function testMakesADoorOfWidthAndHeight()
    {
        $width = 10;
        $height = 10;

        $door = DoorFactory::makeDoor($width, $height);

        static::assertEquals($width, $door->getWidth());
        static::assertEquals($height, $door->getHeight());
    }
}
