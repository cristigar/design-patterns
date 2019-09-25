<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Structural\Bridge\Page;

interface Page
{
    public function __construct(string $content, Theme $theme);
}
