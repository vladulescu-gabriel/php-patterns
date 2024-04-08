<?php

namespace App\Pattern\AdapterPattern\Entity;

class WebAppEntity 
{
    private string $appName;
    private string $appVersion;
    private string $localeLang;

    public function setAppName(string $appName): self 
    {
        $this->appName = $appName;
        return $this;
    }

    public function getAppName(): string 
    {
        return $this->appName;
    }

    public function setAppVersion(string $appVersion): self 
    {
        $this->appVersion = $appVersion;
        return $this;
    }

    public function getAppVersion(): string 
    {
        return $this->appVersion;
    }

    public function setLocaleLang(string $localeLang): self 
    {
        $this->localeLang = $localeLang;
        return $this;
    }

    public function getLocaleLang(): string 
    {
        return $this->localeLang;
    }
}