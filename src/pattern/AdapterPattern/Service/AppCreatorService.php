<?php

namespace App\Pattern\AdapterPattern\Service;
use App\Pattern\AdapterPattern\Entity\MobileAppEntity;
use App\Pattern\AdapterPattern\Entity\WebAppEntity;

class AppCreatorService 
{
    public function createMobileApp(): MobileAppEntity
    {
        $mobileApp = new MobileAppEntity();
        $mobileApp->setPackageName('Management App')
            ->setPackageVersion('1.0')
            ->setLanguage('RO');

        return $mobileApp;
    }

    public function createWebApp(): WebAppEntity
    {
        $webApp = new WebAppEntity();
        $webApp->setAppName('Fitness App')
            ->setAppVersion('2.0')
            ->setLocaleLang('EN');

        return $webApp;
    }

    public function deployWebApp(WebAppEntity $app): string
    {
        $output = "App Name: " . $app->getAppName() . "<newline>";
        $output .= "App Version: " . $app->getAppVersion() . "<newline>";
        $output .= "App Language: " . $app->getLocaleLang() . "<newline>";

        return $output;
    }
}