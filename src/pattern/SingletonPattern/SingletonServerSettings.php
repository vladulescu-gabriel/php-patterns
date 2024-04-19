<?php

namespace App\Pattern\SingletonPattern;

class SingletonServerSettings extends SingletonInstance
{
    private array $settings = [];

    public function getSetting(string $key): string
    {
        return $this->settings[$key];
    }

    public function setSetting(string $key, string $value): void
    {
        $this->settings[$key] = $value;
    }
}