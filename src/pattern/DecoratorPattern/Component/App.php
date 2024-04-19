<?php

namespace App\Pattern\DecoratorPattern\Component;

// component
interface App {
    public function setApp(array $appSettings): void;
    public function getApp(): array;
}