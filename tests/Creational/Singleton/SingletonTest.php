<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Tests\Creational\Singleton;

use DesignPatternsForHumans\Creational\Singleton\President;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testThereCanBeOnlyOnePresident()
    {
        $president1 = President::getInstance();
        $president2 = President::getInstance();

        static::assertEquals($president1, $president2);
    }
}
