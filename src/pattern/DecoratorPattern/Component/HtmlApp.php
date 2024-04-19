<?php

namespace App\Pattern\DecoratorPattern\Component;
use stdClass;

// concrete component
class HtmlApp implements App
{
    private stdClass $appSettings;

    public function setApp(stdClass $appSettings): void
    {
        $this->appSettings = $appSettings;
    }

    public function getApp(): stdClass
    {
        return $this->appSettings;
    }
}