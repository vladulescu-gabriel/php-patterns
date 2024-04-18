<?php

namespace App\Pattern\BridgePattern\RefinedAbstraction;
use App\Pattern\BridgePattern\Abstraction\AppAbstraction;

class WebAppRefinedAbstraction extends AppAbstraction
{
    public function getAppInfo(): string {
        $data = $this->appImplementor->getAppData();
        return "{$data['appName']} - Version {$data['appVersion']}";
    }
}