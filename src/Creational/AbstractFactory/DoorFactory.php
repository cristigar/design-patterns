<?php
declare(strict_types=1);

namespace DesignPatternsForHumans\Creational\AbstractFactory;

interface DoorFactory
{
    public function makeDoor(): Door;

    public function makeFittingExpert(): DoorFittingExpert;
}
