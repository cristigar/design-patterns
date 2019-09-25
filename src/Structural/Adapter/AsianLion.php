<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Structural\Adapter;

class AsianLion implements Lion
{
    public function roar(): string
    {
        return 'Asian lion is roaring...';
    }
}
