<?php

namespace App\Pattern\BuilderPattern\Entity;

class AuthorizationEntity 
{
    private string $role;
    private string $roleColor;

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
    }

    public function getRoleColor(): string
    {
        return $this->roleColor;
    }

    public function setRoleColor(string $roleColor): self
    {
        $this->roleColor = $roleColor;
        return $this;
    }
}
