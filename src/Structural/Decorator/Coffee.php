<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Structural\Decorator;

interface Coffee
{
    public function getPrice(): int;

    public function getDescription(): string;
}
