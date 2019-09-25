<?php

declare(strict_types=1);

namespace DesignPatternsForHumans\Tests\Structural\Bridge;

use DesignPatternsForHumans\Structural\Bridge\Page\About;
use DesignPatternsForHumans\Structural\Bridge\Theme\Aqua;
use DesignPatternsForHumans\Structural\Bridge\Page\Careers;
use DesignPatternsForHumans\Structural\Bridge\Theme\Dark;
use DesignPatternsForHumans\Structural\Bridge\Theme\Light;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testDarkThemeHasDarkBlackColor()
    {
        $darkTheme = new Dark('dark black');

        static::assertEquals('dark black', $darkTheme->getColor());
    }

    public function testLightThemeHasOffWhiteColor()
    {
        $lightTheme = new Light('off white');

        static::assertEquals('off white', $lightTheme->getColor());
    }

    public function testAquaThemeHasLightBlueColor()
    {
        $aquaTheme = new Aqua('light blue');

        static::assertEquals('light blue', $aquaTheme->getColor());
    }

    public function testAboutPageWithEmptyTheme()
    {
        $aboutPage = new About('About page', new EmptyTheme());

        static::assertEquals('About page in empty color', $aboutPage->getContent());
    }

    public function testCareersPageWithAquaTheme()
    {
        $careersPage = new Careers('Careers page', new EmptyTheme());

        static::assertEquals('Careers page in empty color', $careersPage->getContent());
    }
}
