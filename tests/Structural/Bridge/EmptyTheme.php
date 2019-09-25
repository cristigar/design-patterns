<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Tests\Structural\Bridge;

use DesignPatternsForHumans\Structural\Bridge\Page\Theme;

class EmptyTheme implements Theme
{
    public function getColor(): string
    {
        return 'empty color';
    }
}
