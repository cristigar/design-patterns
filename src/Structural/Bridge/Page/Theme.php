<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Structural\Bridge\Page;

interface Theme
{
    public function getColor(): string;
}
