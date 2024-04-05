<?php

namespace App\Pattern\BuilderPattern\Entity;
use App\Pattern\BuilderPattern\Interface\AppInterface;

abstract class AppAbstractEntity implements AppInterface
{
    private FrameworkEntity $framework;
    private ?AuthEntity $auth;
    private ?LoginEntity $login;
    private ?AuthorizationEntity $authorization;
    
    public function __construct()
    {
        $this->framework = new FrameworkEntity();
        $this->auth = new AuthEntity();
        $this->login = new LoginEntity();
        $this->authorization = new AuthorizationEntity();
    }

    public function getFramework(): FrameworkEntity
    {
        return $this->framework;
    }

    public function setFramework(FrameworkEntity $framework): self
    {
        $this->framework = $framework;
        return $this;
    }
    
    public function getAuth(): ?AuthEntity
    {
        return $this->auth;
    }

    public function setAuth(?AuthEntity $auth): self
    {
        $this->auth = $auth;
        return $this;
    }

    public function getLogin(): ?LoginEntity
    {
        return $this->login;
    }

    public function setLogin(?LoginEntity $login): self
    {
        $this->login = $login;
        return $this;
    }
    
    public function getAuthorization(): ?AuthorizationEntity
    {
        return $this->authorization;
    }
    
    public function setAuthorization(?AuthorizationEntity $authorization): self
    {
        $this->authorization = $authorization;
        return $this;
    }
}