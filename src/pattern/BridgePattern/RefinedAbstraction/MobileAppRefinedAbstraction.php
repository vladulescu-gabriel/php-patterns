<?php

namespace App\Pattern\BridgePattern\RefinedAbstraction;
use App\Pattern\BridgePattern\Abstraction\AppAbstraction;

class MobileAppRefinedAbstraction extends AppAbstraction
{
    public function getAppInfo(): string {
        $data = $this->appImplementor->getAppData();
        return "{$data['appName']} - Version {$data['appVersion']}";
    }
}