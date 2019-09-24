<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Creational\Builder;

class BurgerBuilder implements CompleteBurgerBuilder
{
    private $size;
    private $peperoni;
    private $lettuce;
    private $cheese;
    private $tomato;

    public function __construct()
    {
        $this->size = 1;
        $this->peperoni = false;
        $this->lettuce = false;
        $this->cheese = false;
        $this->tomato = false;
    }

    public function selectSize(int $size)
    {
        $this->size = $size;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function addPepperoni()
    {
        $this->peperoni = true;
    }

    public function hasPepperoni(): bool
    {
        return $this->peperoni;
    }

    public function addLettuce()
    {
        $this->lettuce = true;
    }

    public function hasLettuce(): bool
    {
        return $this->lettuce;
    }

    public function addCheese()
    {
        $this->cheese = true;
    }

    public function hasCheese(): bool
    {
        return $this->cheese;
    }

    public function addTomato()
    {
        $this->tomato = true;
    }

    public function hasTomato(): bool
    {
        return $this->tomato;
    }

    public function build(): Burger
    {
        return new Burger($this);
    }
}
