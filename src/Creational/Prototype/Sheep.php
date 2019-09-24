<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Creational\Prototype;

class Sheep
{
    private $name;

    private $category;

    public function __construct(string $name, string $category)
    {
        $this->name = $name;
        $this->category = $category;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function changeNameTo(string $aName)
    {
        $this->name = $aName;
    }
}
