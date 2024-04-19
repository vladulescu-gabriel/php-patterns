<?php

namespace App\Pattern\DecoratorPattern\Processor;
use App\Pattern\DecoratorPattern\Component\App as AppMainComponent;
use stdClass;

class App implements AppMainComponent
{
    public function __construct(
        protected AppMainComponent $appComponent
    ) {
    }

    public function setApp(stdClass $appComponent): void
    {
        $this->appComponent->setApp($appComponent);
    }

    public function getApp(): stdClass
    {
        return $this->appComponent->getApp();
    }
}