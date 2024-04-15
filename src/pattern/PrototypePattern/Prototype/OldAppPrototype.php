<?php

namespace App\Pattern\PrototypePattern\Prototype;
use stdClass;

class OldAppPrototype
{
    private $app;

    public $reference;
    
    public function __clone()
    {
        $this->reference = clone $this->reference;
        $this->reference->parent = $this;
    }

    public function createDefaultApp(): stdClass 
    {
        $app = new stdClass;
        $app->name = "test";
        $app->version = "1.0";
        $this->app = $app;

        return $app;
    }

    public function getApp(): stdClass 
    {
        return $this->app;
    }
}