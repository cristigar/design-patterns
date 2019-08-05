<?php
declare(strict_types=1);

namespace DesignPatternsForHumans\Creational\FactoryMethod;

final class CommunityExecutive implements Interviewer
{
    public function askQuestions(): string
    {
        return 'Asking questions about community building';
    }
}
