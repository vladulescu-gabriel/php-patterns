<?php

namespace App\Pattern\AdapterPattern\Entity;

class MobileAppEntity 
{
    private string $packageName;
    private string $packageVersion;
    private string $language;

    public function setPackageName(string $packageName): self 
    {
        $this->packageName = $packageName;
        return $this;
    }

    public function getPackageName(): string 
    {
        return $this->packageName;
    }

    public function setPackageVersion(string $packageVersion): self 
    {
        $this->packageVersion = $packageVersion;
        return $this;
    }

    public function getPackageVersion(): string 
    {
        return $this->packageVersion;
    }

    public function setLanguage(string $language): self 
    {
        $this->language = $language;
        return $this;
    }

    public function getLanguage(): string 
    {
        return $this->language;
    }
}