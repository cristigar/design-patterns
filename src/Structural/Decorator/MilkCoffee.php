<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Structural\Decorator;

class MilkCoffee
{
    /**
     * @var Coffee
     */
    private $someCoffee;

    /**
     * @var int
     */
    private $valueAdded;

    /**
     * @var string
     */
    private $description;

    public function __construct(Coffee $someCoffee, int $valueAdded, string $description)
    {
        $this->someCoffee = $someCoffee;
        $this->valueAdded = $valueAdded;
        $this->description = $description;
    }

    public function getPrice(): int
    {
        return (int) round($this->someCoffee->getPrice() * (1 + $this->valueAdded / 100));
    }

    public function getDescription(): string
    {
        return "{$this->someCoffee->getDescription()} {$this->description}";
    }
}
