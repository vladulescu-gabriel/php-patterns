<?php

namespace App\Pattern\BuilderPattern\Builder;
use App\Pattern\BuilderPattern\Entity\AppAbstractEntity;
use App\Pattern\BuilderPattern\Interface\AppBuilderInterface;
use App\Pattern\BuilderPattern\Entity\AppBlogEntity;

class BlogAppBuilder implements AppBuilderInterface
{
    private $entity;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->entity = new AppBlogEntity();
    }

    public function setFramework(): self
    {
        $this->entity->getFramework()
            ->setFrontendFramework('Wordpress')
            ->setFrontendDesignFramework('bootstrap')
            ->setBackendFramework('Wordpress')
            ->setBackendORM('Wordpress WPDB');

        return $this;
    }

    /**
     * Unset data that we don't need
     */
    public function setAuth(): self
    {
        $this->entity->setAuth(null);

        return $this;
    }

    /**
     * Unset data that we don't need
     */
    public function setLogin(): self
    {
        $this->entity->setLogin(null);

        return $this;
    }

    /**
     * Unset data that we don't need
     */
    public function setAuthorization(): self
    {
        $this->entity->setAuthorization(null);

        return $this;
    }

    public function setAppProps(
        int $postsPerPage = 10,
        string $displayStyle = 'boxed',
        bool $showDate = false
    ): self {
        $this->entity->setPostsPerPage($postsPerPage)
            ->setDisplayStyle($displayStyle)
            ->setShowDate(true);

        return $this;
    }

    public function getApp(): AppAbstractEntity
    {
        $result = $this->entity;
        $this->reset();

        return $result;
    }
}