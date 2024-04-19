<?php

namespace App\Pattern\BuilderPattern\Entity;

class FrameworkEntity {
    private string $frontendFramework;
    private string $frontendDesignFramework;
    private string $backendFramework;
    private string $backendORM;

    public function getFrontendFramework(): string
    {
        return $this->frontendFramework;
    }

    public function setFrontendFramework(string $frontendFramework): self
    {
        $this->frontendFramework = $frontendFramework;
        return $this;
    }

    public function getFrontendDesignFramework(): string
    {
        return $this->frontendDesignFramework;
    }

    public function setFrontendDesignFramework(string $frontendDesignFramework): self
    {
        $this->frontendDesignFramework = $frontendDesignFramework;
        return $this;
    }

    public function getBackendFramework(): string
    {
        return $this->backendFramework;
    }

    public function setBackendFramework(string $backendFramework): self
    {
        $this->backendFramework = $backendFramework;
        return $this;
    }

    public function getBackendORM(): string
    {
        return $this->backendORM;
    }

    public function setBackendORM(string $backendORM): self
    {
        $this->backendORM = $backendORM;
        return $this;
    }
}
