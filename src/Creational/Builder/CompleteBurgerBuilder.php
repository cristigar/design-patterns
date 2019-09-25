<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Creational\Builder;

interface CompleteBurgerBuilder
{
    public function getSize(): int;

    public function hasPepperoni(): bool;

    public function hasLettuce(): bool;

    public function hasCheese(): bool;

    public function hasTomato(): bool;
}
