<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Structural\Adapter;

class WildDogAdapter implements Lion
{
    /**
     * @var WildDog
     */
    private $wildDog;

    public function __construct(WildDog $wildDog)
    {
        $this->wildDog = $wildDog;
    }

    public function roar(): string
    {
        return $this->wildDog->bark();
    }
}
