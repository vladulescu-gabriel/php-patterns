<?php

namespace App\Pattern\BridgePattern\Service;
use App\Pattern\BridgePattern\ConcreteImplementor\MobileAppConcreteImplementor;
use App\Pattern\BridgePattern\ConcreteImplementor\WebAppConcreteImplementor;
use App\Pattern\BridgePattern\RefinedAbstraction\MobileAppRefinedAbstraction;
use App\Pattern\BridgePattern\RefinedAbstraction\WebAppRefinedAbstraction;

class ClientCodeService
{
    public function createMobileApp()
    {
        $mobileApp = new MobileAppRefinedAbstraction(new MobileAppConcreteImplementor());
        return $mobileApp->getAppInfo();
    }

    public function createWebApp()
    {
        $webApp = new WebAppRefinedAbstraction(new WebAppConcreteImplementor());
        return $webApp->getAppInfo();
    }
}