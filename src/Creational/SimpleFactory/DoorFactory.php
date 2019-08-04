<?php
declare(strict_types=1);

namespace DesignPatternsForHumans\Creational\SimpleFactory;

final class DoorFactory
{
    public static function makeDoor(int $width, int $height): Door
    {
        return new WoodenDoor($width, $height);
    }
}
