<?php

namespace App\Pattern\BuilderPattern\Interface;

interface AppInterface
{   
    public function getFramework();
    public function getAuth();
    public function getLogin();
    public function getAuthorization();
}