<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Structural\Composite;

class Organisation
{
    /**
     * @var Employee[]
     */
    private $employees = [];

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function getTotalSalary(): int
    {
        $totalSalary = 0;
        foreach ($this->employees as $employee) {
            $totalSalary += $employee->getSalary();
        }

        return $totalSalary;
    }
}
