<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Tests\Structural\Composite;

use DesignPatternsForHumans\Structural\Composite\Designer;
use DesignPatternsForHumans\Structural\Composite\Developer;
use DesignPatternsForHumans\Structural\Composite\Organisation;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testDeveloperHasName()
    {
        $developer = new Developer('Blaise Pascal');

        static::assertEquals('Blaise Pascal', $developer->getName());
    }

    public function testDeveloperHasRoles()
    {
        $developer = new Developer('Blaise Pascal');
        $developer->setRoles(['front-end', 'back-end']);

        static::assertEquals(['front-end', 'back-end'], $developer->getRoles());
    }

    public function testDesignerHasName()
    {
        $designer = new Designer('Enrico Fermi');

        static::assertEquals('Enrico Fermi', $designer->getName());
    }

    public function testDesignerHasRoles()
    {
        $designer = new Designer('Enrico Fermi');
        $designer->setRoles(['web', 'typography']);

        static::assertEquals(['web', 'typography'], $designer->getRoles());
    }

    public function testOrganisationCanBeCreated()
    {
        static::assertInstanceOf(Organisation::class, new Organisation());
    }

    public function testOrganisationCalculatesTotalSalaryOfEmployees()
    {
        $organisation = new Organisation();

        $employee1 = new Developer('Georg Ohm');
        $employee1->setSalary(1000);
        $organisation->addEmployee($employee1);

        $employee2 = new Designer('Vincent Van Gogh');
        $employee2->setSalary(1200);
        $organisation->addEmployee($employee2);

        static::assertEquals(2200, $organisation->getTotalSalary());
    }
}
