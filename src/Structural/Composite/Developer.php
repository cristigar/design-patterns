<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Structural\Composite;

class Developer implements Employee
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $salary;

    /**
     * @var array
     */
    private $roles;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }
}
