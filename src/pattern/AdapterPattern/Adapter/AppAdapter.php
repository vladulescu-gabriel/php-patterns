<?php

namespace App\Pattern\AdapterPattern\Adapter;
use App\Pattern\AdapterPattern\Entity\MobileAppEntity;
use App\Pattern\AdapterPattern\Entity\WebAppEntity;

class AppAdapter extends WebAppEntity
{
    private MobileAppEntity $mobileApp;

    public function __construct(MobileAppEntity $mobileApp)
    {
        $this->mobileApp = $mobileApp;
    }

    public function getAppName(): string
    {
       return $this->mobileApp->getPackageName();
    }

    public function getAppVersion(): string
    {
       return $this->mobileApp->getPackageVersion();
    }

    public function getLocaleLang(): string
    {
       return $this->mobileApp->getLanguage();
    }
}