<?php

namespace App\Pattern\BridgePattern\ConcreteImplementor;
use App\Pattern\BridgePattern\Implementor\AppImplementor;

class MobileAppConcreteImplementor implements AppImplementor {
    public function getAppData(): array {
        return [
            'appName' => 'MobileApp',
            'appVersion' => '1.0',
        ];
    }
}
