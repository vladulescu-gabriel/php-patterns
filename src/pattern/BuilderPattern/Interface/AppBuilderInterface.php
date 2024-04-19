<?php

namespace App\Pattern\BuilderPattern\Interface;

interface AppBuilderInterface 
{
    public function setFramework();
    public function setAuth();
    public function setLogin();
    public function setAuthorization();
    public function setAppProps();
}