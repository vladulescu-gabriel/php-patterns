<?php

namespace App\Example;
use App\Pattern\PrototypePattern\Service\PrototypeService;
$clientCode = new PrototypeService;

echo "
    <h4>Prototype Pattern</h4>
    <h5>Real World Case</h5>
    <p>
        <b style='color:red'>
        CASE: We have an old class of App that handles app creation, but we need to do
        some changes to the new apps, but as a base, we need the old app creation process
        </b>
        <newline>
    </p>
";

echo '
    <h5>Cloning and setup circular reference</h5>
    <p><b style="color:red">Note that var_export that we use, will throw an error because do not support print of circular reference</b></p>
    <pre>
        $oldApp = new OldAppPrototype(); 
        $oldApp->createDefaultApp();

        $newAppInstance = new NewAppPrototype($oldApp);
        $oldApp->reference = $newAppInstance;

        $newApp = clone $oldApp;

        return [
            $newApp,
            $oldApp
        ];
    </pre>
';
$output = var_export($clientCode->cloneAndSetupReference(), true);

echo '<h5>Result:</h5>';
echo '<pre>' . $output . '</pre>';

echo '
    <h5>Using Old app reference to create App in the New App</h5>
    <pre>
        // client code
        $oldApp = new OldAppPrototype(); 
        $oldApp->createDefaultApp();

        $newAppInstance = new NewAppPrototype($oldApp);
        $oldApp->reference = $newAppInstance;

        $newApp = clone $oldApp;
        return $newApp->reference->createOldApp();

        // newApp
        return $this->parent->createDefaultApp();

        // oldApp
        public function createDefaultApp(): stdClass 
        {
            $app = new stdClass;
            $app->name = "test";
            $app->version = "1.0";
            $this->app = $app;
    
            return $app;
        }
    </pre>
';

$output = var_export($clientCode->createOldApp(), true);

echo '<h5>Result:</h5>';
echo '<pre>' . $output . '</pre>';

echo '
    <h5>Using Old custom app from reference</h5>
    <pre>
        // client code
        $oldApp = new OldAppPrototype(); 
        $oldApp->createDefaultApp();

        $newAppInstance = new NewAppPrototype($oldApp);
        $oldApp->reference = $newAppInstance;

        $newApp = clone $oldApp;
        return $newApp->reference->createCustomOldApp();
    </pre>
';

$output = var_export($clientCode->createCustomOldApp(), true);

echo '<h5>Result:</h5>';
echo '<pre>' . $output . '</pre>';

echo '
    <h5>Using New app from Old App</h5>
    <pre>
        // client code
        $oldApp = new OldAppPrototype(); 
        $oldApp->createDefaultApp();

        $newAppInstance = new NewAppPrototype($oldApp);
        $oldApp->reference = $newAppInstance;

        $newApp = clone $oldApp;
        return $newApp->reference->createNewAppFromOldApp();
    </pre>
';

$output = var_export($clientCode->createNewAppFromOldApp(), true);

echo '<h5>Result:</h5>';
echo '<pre>' . $output . '</pre>';