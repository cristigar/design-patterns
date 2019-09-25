<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Structural\Adapter;

class Hunter
{
    public function hunt(Lion $lion)
    {
        return $lion->roar();
    }
}
