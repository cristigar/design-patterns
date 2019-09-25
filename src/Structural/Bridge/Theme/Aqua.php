<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Structural\Bridge\Theme;

use DesignPatternsForHumans\Structural\Bridge\Page\Theme as PageTheme;

class Aqua implements Theme, PageTheme
{
    /**
     * @var string
     */
    private $color;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
