<?php
declare(strict_types=1);

namespace DesignPatternsForHumans\Creational\FactoryMethod;

abstract class HiringManager
{
    abstract protected function makeInterviewer(): Interviewer;

    public function takeInterview(): string
    {
        $interviewer = $this->makeInterviewer();

        return $interviewer->askQuestions();
    }
}
