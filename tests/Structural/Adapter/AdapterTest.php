<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Tests\Structural\Adapter;

use DesignPatternsForHumans\Structural\Adapter\AfricanLion;
use DesignPatternsForHumans\Structural\Adapter\AsianLion;
use DesignPatternsForHumans\Structural\Adapter\Hunter;
use DesignPatternsForHumans\Structural\Adapter\WildDog;
use DesignPatternsForHumans\Structural\Adapter\WildDogAdapter;
use PHPStan\Testing\TestCase;

class AdapterTest extends TestCase
{
    public function testHunterCanHuntAfricanLion()
    {
        $africanLion = new AfricanLion();
        $hunter = new Hunter();

        static::assertEquals('African lion is roaring...', $hunter->hunt($africanLion));
    }

    public function testHunterCanHuntAsianLion()
    {
        $asianLion = new AsianLion();
        $hunter = new Hunter();

        static::assertEquals('Asian lion is roaring...', $hunter->hunt($asianLion));
    }

    public function testHunterCanHuntWildDog()
    {
        $wildDog = new WildDog();
        $wildDogAdapter = new WildDogAdapter($wildDog);

        $hunter = new Hunter();

        static::assertEquals('Wild dog is barking...', $hunter->hunt($wildDogAdapter));
    }
}
