<?php

namespace App\Pattern\BridgePattern\ConcreteImplementor;
use App\Pattern\BridgePattern\Implementor\AppImplementor;

class WebAppConcreteImplementor implements AppImplementor {
    public function getAppData(): array {
        return [
            'appName' => 'WebApp',
            'appVersion' => '1.0',
        ];
    }
}
