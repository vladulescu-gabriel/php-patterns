<?php

namespace App\Pattern\DecoratorPattern\Processor;
use App\Pattern\DecoratorPattern\Processor\App as AppMainProcessor;

// concrete decorator
class JsonApp extends AppMainProcessor
{
    public function exportJsonApp(array $appSettings): string
    {
        parent::setApp($appSettings);
        $app = parent::getApp();
        $app["export"] = "JSON";

        return json_encode($app);
    }
}