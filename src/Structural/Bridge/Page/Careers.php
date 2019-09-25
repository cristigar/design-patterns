<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Structural\Bridge\Page;

class Careers implements Page
{
    /**
     * @var string
     */
    private $content;

    /**
     * @var Theme
     */
    private $theme;

    public function __construct(string $content, Theme $theme)
    {
        $this->content = $content;
        $this->theme = $theme;
    }

    public function getContent()
    {
        return "{$this->content} in {$this->theme->getColor()}";
    }
}
