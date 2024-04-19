<?php

namespace App\Pattern\DecoratorPattern\Component;
use stdClass;

// component
interface App {
    public function setApp(stdClass $appSettings): void;
    public function getApp(): stdClass;
}