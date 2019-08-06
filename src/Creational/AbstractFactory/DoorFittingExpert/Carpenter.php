<?php
declare(strict_types=1);

namespace DesignPatternsForHumans\Creational\AbstractFactory\DoorFittingExpert;

use DesignPatternsForHumans\Creational\AbstractFactory\DoorFittingExpert;

final class Carpenter implements DoorFittingExpert
{
    public function getDescription(): string
    {
        return 'I can only fit wooden doors';
    }
}
