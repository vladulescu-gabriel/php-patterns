<?php

namespace App\Pattern\PrototypePattern\Prototype;
use stdClass;

class NewAppPrototype
{
    private $customApp;
    private $newApp;
    public $parent;
    
    public function __construct(OldAppPrototype $oldApp)
    {
        $this->parent = $oldApp;
    }

    public function createOldApp(): stdClass 
    {
        return $this->parent->createDefaultApp();
    }

    public function createCustomOldApp(): stdClass 
    {
        $newApp = $this->parent->createDefaultApp();
        $newApp->framework = 'NodeJS';
        $this->customApp = $newApp;

        return $this->customApp;
    }

    public function createNewAppFromOldApp(): stdClass 
    {
        $newApp = $this->parent->getApp();
        $newApp->version = '2.0';
        $this->newApp = $newApp;

        return $this->newApp;
    }

    public function getOldApp(): stdClass
    {
        return $this->customApp;
    }

    public function getNewApp(): stdClass
    {
        return $this->newApp;
    }
}