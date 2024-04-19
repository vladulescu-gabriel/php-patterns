<?php

namespace App\Pattern\DecoratorPattern\Service;
use App\Pattern\DecoratorPattern\Component\MainApp;
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
        $this->JSONProcessor = new JSONProcessor(new MainApp);
        $this->HTMLProcessor = new HTMLProcessor(new MainApp);

        $appData = array();
        $appData["id"] = 1;
        $appData["version"] = "2.0";
        $appData["name"] = "Web App";

        $this->appData = $appData;
    }

    public function exportAppJSON(): stdClass 
    {
        $jsonApp = new MainApp;
        $jsonApp->setApp($this->appData);

        return $this->export(
            $this->appData,
            $jsonApp,
            $this->JSONProcessor->exportJsonApp($jsonApp->getApp())
        ); 
    }

    public function exportAppHTML(): stdClass 
    {
        $htmlApp = new MainApp;
        $htmlApp->setApp($this->appData);

        return $this->export(
            $this->appData,
            $htmlApp,
            $this->HTMLProcessor->exportHTMLApp($htmlApp->getApp())
        ); 
    }

    public function export($mainObject, $concreteComponent, $customExport): stdClass
    {
        $object = new stdClass;
        $object->main = $mainObject;
        $object->component = $concreteComponent;
        $object->custom = $customExport;

        return $object;
    }
}