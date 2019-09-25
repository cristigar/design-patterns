<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Structural\Bridge\Theme;

interface Theme
{
    public function __construct(string $color);

    public function getColor(): string;
}
