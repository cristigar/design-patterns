<?php
declare(strict_types=1);

namespace DesignPatternsForHumans\Creational\SimpleFactory;

interface Door
{
    public function getWidth(): int;

    public function getHeight(): int;
}
