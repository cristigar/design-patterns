<?php
declare(strict_types=1);

namespace DesignPatternsForHumans\Creational\AbstractFactory\DoorFactory;

use DesignPatternsForHumans\Creational\AbstractFactory\Door;
use DesignPatternsForHumans\Creational\AbstractFactory\Door\IronDoor;
use DesignPatternsForHumans\Creational\AbstractFactory\DoorFactory;
use DesignPatternsForHumans\Creational\AbstractFactory\DoorFittingExpert;
use DesignPatternsForHumans\Creational\AbstractFactory\DoorFittingExpert\Welder;

final class IronDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new IronDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Welder();
    }
}
