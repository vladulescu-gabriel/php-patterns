<?php

namespace App\Pattern\DecoratorPattern\Processor;
use App\Pattern\DecoratorPattern\Component\App as AppMainComponent;

// main decorator
class App implements AppMainComponent
{
    public function __construct(
        protected AppMainComponent $appComponent
    ) {
    }

    public function setApp(array $appComponent): void
    {
        $this->appComponent->setApp($appComponent);
    }

    public function getApp(): array
    {
        return $this->appComponent->getApp();
    }
}