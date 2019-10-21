<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Structural\Facade;

final class ComputerFacade
{
    /**
     * @var Computer
     */
    private $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function turnOn(): string
    {
        return sprintf(
            '%s %s %s %s',
            $this->computer->getElectricShock(),
            $this->computer->makeSound(),
            $this->computer->showLoadingScreen(),
            $this->computer->bam()
        );
    }

    public function turnOff(): string
    {
        return sprintf(
            '%s %s %s',
            $this->computer->closeEverything(),
            $this->computer->pullCurrent(),
            $this->computer->sooth()
        );
    }
}
