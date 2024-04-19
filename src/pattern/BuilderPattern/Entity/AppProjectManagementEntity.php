<?php

namespace App\Pattern\BuilderPattern\Entity;

class AppProjectManagementEntity extends AppAbstractEntity
{
    private $panelDesign;
    private $panelTitle;
    private $requiredRole;
    private $actionEdit = false;
    private $actionDelete = false;

    public function getPanelDesign(): string
    {
        return $this->panelDesign;
    }

    public function setPanelDesign(string $panelDesign): self
    {
        $this->panelDesign = $panelDesign;
        return $this;
    }

    public function getPanelTitle(): string
    {
        return $this->panelTitle;
    }

    public function setPanelTitle(string $panelTitle): self
    {
        $this->panelTitle = $panelTitle;
        return $this;
    }

    public function hasActionEdit(): bool
    {
        return $this->actionEdit;
    }

    public function setActionEdit(bool $actionEdit): self
    {
        $this->actionEdit = $actionEdit;
        return $this;
    }

    public function hasActionDelete(): bool
    {
        return $this->actionDelete;
    }

    public function setActionDelete(bool $actionDelete): self
    {
        $this->actionDelete = $actionDelete;
        return $this;
    }
}
