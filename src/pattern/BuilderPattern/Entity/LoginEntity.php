<?php

namespace App\Pattern\BuilderPattern\Entity;

class LoginEntity 
{
    private bool $hasEmailField;
    private bool $hasPasswordField;
    private bool $hasLoginWithUsername;
    private bool $requiresEmailVerified;

    public function hasEmailField(): bool
    {
        return $this->hasEmailField;
    }

    public function setHasEmailField(bool $hasEmailField): self
    {
        $this->hasEmailField = $hasEmailField;
        return $this;
    }

    public function hasPasswordField(): bool
    {
        return $this->hasPasswordField;
    }

    public function setHasPasswordField(bool $hasPasswordField): self
    {
        $this->hasPasswordField = $hasPasswordField;
        return $this;
    }

    public function hasLoginWithUsername(): bool
    {
        return $this->hasLoginWithUsername;
    }

    public function setHasLoginWithUsername(bool $hasLoginWithUsername): self
    {
        $this->hasLoginWithUsername = $hasLoginWithUsername;
        return $this;
    }

    public function requiresEmailVerified(): bool
    {
        return $this->requiresEmailVerified;
    }

    public function setRequiresEmailVerified(bool $requiresEmailVerified): self
    {
        $this->requiresEmailVerified = $requiresEmailVerified;
        return $this;
    }
}
