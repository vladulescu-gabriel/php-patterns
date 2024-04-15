<?php

namespace App\Pattern\PrototypePattern\Service;
use App\Pattern\PrototypePattern\Prototype\NewAppPrototype;
use App\Pattern\PrototypePattern\Prototype\OldAppPrototype;

class PrototypeService 
{
    public function cloneAndSetupReference()
    {
        $oldApp = new OldAppPrototype(); 
        $oldApp->createDefaultApp();

        $newAppInstance = new NewAppPrototype($oldApp);
        $oldApp->reference = $newAppInstance;

        $newApp = clone $oldApp;

        return [
            $newApp,
            $oldApp
        ];
    }

    public function createOldApp()
    {
        $oldApp = new OldAppPrototype(); 
        $oldApp->createDefaultApp();

        $newAppInstance = new NewAppPrototype($oldApp);
        $oldApp->reference = $newAppInstance;

        $newApp = clone $oldApp;
        return $newApp->reference->createOldApp();
    }

    public function createCustomOldApp()
    {
        $oldApp = new OldAppPrototype(); 
        $oldApp->createDefaultApp();

        $newAppInstance = new NewAppPrototype($oldApp);
        $oldApp->reference = $newAppInstance;

        $newApp = clone $oldApp;
        return $newApp->reference->createCustomOldApp();
    }

    public function createNewAppFromOldApp()
    {
        $oldApp = new OldAppPrototype(); 
        $oldApp->createDefaultApp();

        $newAppInstance = new NewAppPrototype($oldApp);
        $oldApp->reference = $newAppInstance;

        $newApp = clone $oldApp;
        return $newApp->reference->createNewAppFromOldApp();
    }
}