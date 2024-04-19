<?php

namespace App\Pattern\FactoryPattern\Factory;
use App\Pattern\FactoryPattern\Interface\AppInterface;

abstract class AppFactory
{
    abstract public function getApp(): AppInterface;

    public function deployApp(string $envToDeploy): string
    {
        $app = $this->getApp();

        $output  = "App deployed to:" . $envToDeploy . "<newline>";
        $output .= "App Name:" . $app->getAppName() . "<newline>";
        $output .= "App Version:" . $app->getAppVersion() . "<newline>";
        $output .= "App Framework:" . $app->getAppFramework() . "<newline>";

        return $output;
    }
}