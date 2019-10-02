<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Structural\Decorator;

class SimpleCoffee implements Coffee
{
    /**
     * @var int
     */
    private $price;

    /**
     * @var string
     */
    private $description;

    public function __construct(int $price, string $description)
    {
        $this->price = $price;
        $this->description = $description;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
