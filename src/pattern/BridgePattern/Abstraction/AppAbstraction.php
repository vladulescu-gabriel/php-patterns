<?php

namespace App\Pattern\BridgePattern\Abstraction;
use App\Pattern\BridgePattern\Implementor\AppImplementor;

abstract class AppAbstraction
{
    protected $appImplementor;

    public function __construct(AppImplementor $appImplementor)
    {
        $this->appImplementor = $appImplementor;
    }

    abstract public function getAppInfo();
}