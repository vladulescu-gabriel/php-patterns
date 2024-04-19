<?php

namespace App\Pattern\FactoryPattern\Factory;
use App\Pattern\FactoryPattern\Entity\WebAppEntity;
use App\Pattern\FactoryPattern\Interface\AppInterface;

class WebAppFactory extends AppFactory
{
    private AppInterface $app;

    public function __construct(
        string $appName,
        string $appVersion,
        string $appFramework
    ) {

        $this->app = new WebAppEntity();
        $this->app->setAppName($appName)
            ->setAppVersion($appVersion)
            ->setAppFramework($appFramework);
    }

    public function getApp(): AppInterface
    {
        return $this->app;
    }
}