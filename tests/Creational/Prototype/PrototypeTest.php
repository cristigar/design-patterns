<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Tests\Creational\Prototype;

use DesignPatternsForHumans\Creational\Prototype\Sheep;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testClonedSheepCanHaveDifferentName()
    {
        $firstSheep = new Sheep('Dolly', 'Mountain sheep');

        $anotherSheep = clone $firstSheep;
        $anotherSheep->changeNameTo('Molly');

        static::assertEquals('Dolly', $firstSheep->getName());
        static::assertEquals('Molly', $anotherSheep->getName());
        static::assertNotEquals($firstSheep->getName(), $anotherSheep->getName());
    }

    public function testClonedSheepBelongsToTheSameCategory()
    {
        $firstSheep = new Sheep('Dolly', 'Mountain sheep');

        $anotherSheep = clone $firstSheep;
        $anotherSheep->changeNameTo('Molly');

        static::assertEquals('Mountain sheep', $firstSheep->getCategory());
        static::assertEquals($firstSheep->getCategory(), $anotherSheep->getCategory());
    }
}
