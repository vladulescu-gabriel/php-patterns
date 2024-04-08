<?php

namespace App\Pattern\FactoryPattern\Entity;
use App\Pattern\FactoryPattern\Interface\AppInterface;

class MobileAppEntity implements AppInterface
{
    private string $appName;
    private string $appVersion;
    private string $appFramework;

    public function setAppName(string $appName):self
    {
        $this->appName = $appName;
        return $this;
    }
    
    public function getAppName():string
    {
        return $this->appName;
    }

    public function setAppVersion(string $appVersion):self
    {
        $this->appVersion = $appVersion;
        return $this;
    }

    public function getAppVersion():string
    {
        return $this->appVersion;
    }
    
    public function setAppFramework(string $appFramework): self
    {
        $this->appFramework = $appFramework;
        return $this;
    }

    public function getAppFramework():string
    {
        return $this->appFramework;
    }
}