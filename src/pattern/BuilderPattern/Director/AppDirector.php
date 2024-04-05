<?php

namespace App\Pattern\BuilderPattern\Director;
use App\Pattern\BuilderPattern\Builder\BlogAppBuilder;
use App\Pattern\BuilderPattern\Builder\ProjectManagementAppBuilder;
use App\Pattern\BuilderPattern\Interface\AppBuilderInterface;

class AppDirector {

    private $builder;

    public function setBuilder(AppBuilderInterface $builder): void
    {
        $this->builder = $builder;
    }

    public function createDefaultBlogApp(): ?AppBuilderInterface
    {
        if ($this->builder instanceof BlogAppBuilder) {
            /**
             * @var BlogAppBuilder $builder
             */
            $builder = $this->builder->setFramework()
                ->setAuth()
                ->setLogin()
                ->setAuthorization()
                ->setAppProps();

            return $builder;
        }

        return null;
    }

    public function createCustomVueJsBlogApp(): ?AppBuilderInterface
    {
        if ($this->builder instanceof BlogAppBuilder) {
            /**
             * @var BlogAppBuilder $builder
             */
            $builder = $this->builder->setFramework()
                ->setAuth()
                ->setLogin()
                ->setAuthorization()
                ->setAppProps(25, 'full-sized', true);
    
            $builder->getApp()
                ->getFramework()
                ->setFrontendFramework('VueJS')
                ->setBackendFramework('ExpressJS')
                ->setBackendORM('Sequelize');
            
            return $builder;
        }

        return null;
    }

    public function createProjectManagementApp(): ?AppBuilderInterface
    {
        if ($this->builder instanceof AppBuilderInterface) {
            /**
             * @var ProjectManagementAppBuilder $builder
             */
            $builder = $this->builder->setAuth()
                ->setLogin()
                ->setAuthorization()
                ->setAppProps()
                ->setFramework();
    
            return $builder;
        }

        return null;
    }
}
