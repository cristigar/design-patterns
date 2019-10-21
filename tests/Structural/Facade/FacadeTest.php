<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Tests\Structural\Facade;

use DesignPatternsForHumans\Structural\Facade\Computer;
use DesignPatternsForHumans\Structural\Facade\ComputerFacade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testComputerTurnsOn()
    {
        $computer = new Computer();
        $computerFacade = new ComputerFacade($computer);

        static::assertSame('Ouch! Beep beep! Loading... Ready to be used!', $computerFacade->turnOn());
    }

    public function testComputerTurnsOff()
    {
        $computer = new Computer();
        $computerFacade = new ComputerFacade($computer);

        static::assertSame('Bup bup bup buzzz! Haah! Zzzzz!', $computerFacade->turnOff());
    }
}
