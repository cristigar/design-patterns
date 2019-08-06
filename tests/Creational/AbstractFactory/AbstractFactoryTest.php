<?php
declare(strict_types=1);

namespace DesignPatternsForHumans\Tests\Creational\AbstractFactory;

use DesignPatternsForHumans\Creational\AbstractFactory\DoorFactory\IronDoorFactory;
use DesignPatternsForHumans\Creational\AbstractFactory\DoorFactory\WoodenDoorFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testWoodenDoorFactory()
    {
        $woodenFactory = new WoodenDoorFactory();
        $door = $woodenFactory->makeDoor();
        $expert = $woodenFactory->makeFittingExpert();

        static::assertEquals('I am a wooden door', $door->getDescription());
        static::assertEquals('I can only fit wooden doors', $expert->getDescription());
    }

    public function testIronDoorFactory()
    {
        $ironFactory = new IronDoorFactory();
        $door = $ironFactory->makeDoor();
        $expert = $ironFactory->makeFittingExpert();

        static::assertEquals('I am an iron door', $door->getDescription());
        static::assertEquals('I can only fit iron doors', $expert->getDescription());
    }
}
