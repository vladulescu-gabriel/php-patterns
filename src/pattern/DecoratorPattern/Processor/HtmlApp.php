<?php

namespace App\Pattern\DecoratorPattern\Processor;
use App\Pattern\DecoratorPattern\Processor\App as AppMainProcessor;

// concrete decorator
class HtmlApp extends AppMainProcessor
{
    public function exportHTMLApp(array $appSettings): string
    {
        parent::setApp($appSettings);
        $app = parent::getApp();

        $app["export"] = "HTML";
        $template  = '<p style="color:red;">Name: ' . $app["name"] . '</p>';
        $template .= '<p style="color:green;">Version: ' . $app["version"] . '</p>';
        $template .= '<p style="color:yellow;">Export: ' . $app["export"] . '</p>';

        return $template;
    }
}