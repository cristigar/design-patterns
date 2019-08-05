<?php
declare(strict_types=1);

namespace DesignPatternsForHumans\Creational\FactoryMethod;

final class Developer implements Interviewer
{
    public function askQuestions(): string
    {
        return 'Asking questions about design patterns';
    }
}
