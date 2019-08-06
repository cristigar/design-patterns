<?php
declare(strict_types=1);

namespace DesignPatternsForHumans\Creational\AbstractFactory\DoorFactory;

use DesignPatternsForHumans\Creational\AbstractFactory\Door;
use DesignPatternsForHumans\Creational\AbstractFactory\Door\WoodenDoor;
use DesignPatternsForHumans\Creational\AbstractFactory\DoorFactory;
use DesignPatternsForHumans\Creational\AbstractFactory\DoorFittingExpert;
use DesignPatternsForHumans\Creational\AbstractFactory\DoorFittingExpert\Carpenter;

final class WoodenDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Carpenter();
    }
}
