<?php

namespace App\Pattern\BuilderPattern\Entity;

class AuthEntity {
    private string $method;
    private array $domainsAllowed;
    private bool $corsPolicy;

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method): self
    {
        $this->method = $method;
        return $this;
    }

    public function getDomainsAllowed(): array
    {
        return $this->domainsAllowed;
    }

    public function setDomainsAllowed(array $domainsAllowed): self
    {
        $this->domainsAllowed = $domainsAllowed;
        return $this;
    }

    public function getCorsPolicy(): bool
    {
        return $this->corsPolicy;
    }

    public function setCorsPolicy(bool $corsPolicy): self
    {
        $this->corsPolicy = $corsPolicy;
        return $this;
    }
}
