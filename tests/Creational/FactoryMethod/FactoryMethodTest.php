<?php
declare(strict_types=1);

namespace DesignPatternsForHumans\Tests\Creational\FactoryMethod;

use DesignPatternsForHumans\Creational\FactoryMethod\DevelopmentManager;
use DesignPatternsForHumans\Creational\FactoryMethod\MarketingManager;
use PHPUnit\Framework\TestCase;

/**
 * **Description**
 *
 * Consider the case of a hiring manager. It is impossible for one person to
 * interview for each of the positions. Based on the job opening, she has to
 * decide and delegate the interview steps to different people.
 *
 * **In plain words**
 *
 * It provides a way to delegate the instantiation logic to child classes.
 *
 * **Wikipedia says**
 *
 * In class-based programming, the factory method pattern is a creational
 * pattern that uses factory methods to deal with the problem of creating
 * objects without having to specify the exact class of the object that will be
 * created. This is done by creating objects by calling a factory method—either
 * specified in an interface and implemented by child classes, or implemented
 * in a base class and optionally overridden by derived classes—rather than by
 * calling a constructor.
 *
 * @see https://github.com/kamranahmedse/design-patterns-for-humans#-factory-method
 */
class FactoryMethodTest extends TestCase
{
    public function testDevelopmentManager()
    {
        $developmentManager = new DevelopmentManager();
        static::assertEquals('Asking questions about design patterns', $developmentManager->takeInterview());
    }

    public function testMarketingManager()
    {
        $marketingManager = new MarketingManager();
        static::assertEquals('Asking questions about community building', $marketingManager->takeInterview());
    }
}
