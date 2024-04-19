<?php

namespace App\Pattern\DecoratorPattern\Service;
use App\Pattern\DecoratorPattern\Component\App as AppMainComponent;
use App\Pattern\DecoratorPattern\Component\HtmlApp;
use App\Pattern\DecoratorPattern\Component\JsonApp;
use App\Pattern\DecoratorPattern\Processor\HtmlApp as HTMLProcessor;
use App\Pattern\DecoratorPattern\Processor\JsonApp as JSONProcessor;
use stdClass;

class ClientCode 
{
    private $appData;
    private HTMLProcessor $HTMLProcessor;
    private JSONProcessor $JSONProcessor;

    public function __construct() 
    {
        $this->JSONProcessor = new JSONProcessor(new JsonApp);
        $this->HTMLProcessor = new HTMLProcessor(new HtmlApp);

        $appData = new stdClass;
        $appData->id = 1;
        $appData->version = "2.0";
        $appData->name = "Web App";

        $this->appData = $appData;
    }

    public function exportAppJSON(): stdClass 
    {
        $jsonApp = new JsonApp;
        $jsonApp->setApp($this->appData);

        return $this->export(
            $jsonApp,
            $this->JSONProcessor->exportJsonApp($jsonApp->getApp())
        ); 
    }

    public function exportAppHTML(): stdClass 
    {
        $htmlApp = new HtmlApp;
        $htmlApp->setApp($this->appData);

        return $this->export(
            $htmlApp,
            $this->HTMLProcessor->exportHTMLApp($htmlApp->getApp())
        ); 
    }

    public function export($mainObject, $customExport): stdClass
    {
        $object = new stdClass;
        $object->main = $mainObject;
        $object->custom = $customExport;

        return $object;
    }
}