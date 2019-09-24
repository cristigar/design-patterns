<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Creational\Builder;

class Burger
{
    private $size;
    private $pepperoni;
    private $lettuce;
    private $cheese;
    private $tomato;

    public function __construct(CompleteBurgerBuilder $builder)
    {
        $this->size = $builder->getSize();
        $this->pepperoni = $builder->hasPepperoni();
        $this->lettuce = $builder->hasLettuce();
        $this->cheese = $builder->hasCheese();
        $this->tomato = $builder->hasTomato();
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function hasPepperoni(): bool
    {
        return $this->pepperoni;
    }

    public function hasLettuce(): bool
    {
        return $this->lettuce;
    }

    public function hasCheese(): bool
    {
        return $this->cheese;
    }

    public function hasTomato(): bool
    {
        return $this->tomato;
    }
}
