<?php

namespace App\Pattern\DecoratorPattern\Component;

// concrete component
class MainApp implements App
{
    private array $appSettings;

    public function setApp(array $appSettings): void
    {
        $this->appSettings = $appSettings;
    }

    public function getApp(): array
    {
        return $this->appSettings;
    }
}