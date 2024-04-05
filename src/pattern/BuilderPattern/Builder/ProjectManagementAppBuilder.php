<?php

namespace App\Pattern\BuilderPattern\Builder;
use App\Pattern\BuilderPattern\Entity\AppAbstractEntity;
use App\Pattern\BuilderPattern\Interface\AppBuilderInterface;
use App\Pattern\BuilderPattern\Entity\AppProjectManagementEntity;

class ProjectManagementAppBuilder implements AppBuilderInterface
{
    private $entity;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->entity = new AppProjectManagementEntity();
    }

    public function setFramework(): self
    {
        $this->entity->getFramework()
            ->setFrontendFramework('VueJS')
            ->setFrontendDesignFramework('vuefy')
            ->setBackendFramework('ExpressJS')
            ->setBackendORM('Sequalize');

        return $this;
    }

    public function setAuth(): self
    {
        $this->entity->getAuth()
            ->setMethod('JWT')
            ->setDomainsAllowed(['localhost'])
            ->setCorsPolicy(true);

        return $this;
    }

    public function setLogin(): self
    {
        $this->entity->getLogin() 
            ->setHasEmailField(true)
            ->setHasPasswordField(true)
            ->setHasLoginWithUsername(true)
            ->setRequiresEmailVerified(false);

        return $this;
    }

    public function setAuthorization(): self
    {
        $this->entity->getAuthorization()
            ->setRole('Admin')
            ->setRoleColor('#ffffff');

        return $this;
    }

    public function setAppProps(
        string $panelDesign = 'fullscreen-table',
        string $panelTitle = 'Project Management',
        bool $hasEditAction = false,
        bool $hasDeleteAction = false
    ): self {
        $this->entity->setPanelDesign($panelDesign)
            ->setPanelTitle($panelTitle)
            ->setActionEdit(true)
            ->setActionDelete(true);

        return $this;
    }

    public function getApp(): AppAbstractEntity
    {
        $result = $this->entity;
        $this->reset();

        return $result;
    }
}