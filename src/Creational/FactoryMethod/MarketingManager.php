<?php
declare(strict_types=1);

namespace DesignPatternsForHumans\Creational\FactoryMethod;

final class MarketingManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}
