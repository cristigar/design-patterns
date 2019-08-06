<?php
declare(strict_types=1);

namespace DesignPatternsForHumans\Creational\AbstractFactory\Door;

use DesignPatternsForHumans\Creational\AbstractFactory\Door;

final class IronDoor implements Door
{
    public function getDescription(): string
    {
        return 'I am an iron door';
    }
}
