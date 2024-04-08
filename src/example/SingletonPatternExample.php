<?php

namespace App\Example;
use App\Pattern\SingletonPattern\SingletonInstance;
use App\Pattern\SingletonPattern\SingletonServerSettings;

echo '
    <h4>Singleton Pattern</h4>
    <h5>Real World Case</h5>
    <p>
        We have multiple settings in our app, and we need to access them more easly
    </p>
';

echo '
    <h5>Single instance check</h5>
    <pre>
        if ($serverSettings === $serverSettings2) {
            echo "Same instance of server settings";
        } else {
            echo "Different instance of server settings";
        }
    </pre>
';

echo '<h6>Output: </h6>';

$serverSettings = SingletonServerSettings::getInstance(); 
$serverSettings2 = SingletonServerSettings::getInstance(); 

if ($serverSettings === $serverSettings2) {
    $output = "Same instance of server settings";
} else {
    $output = "Different instance of server settings";
}

echo '<p>' . $output . '</p>';


echo '
    <h5>Adding a new Setting and check if are on the same instance</h5>
    <pre>
        $settingInstance1 = SingletonServerSettings::getInstance(); 
        $settingInstance2 = SingletonServerSettings::getInstance(); 
        $settingInstance1->setSetting("app_key", "DQWD21DKW242KFWFwe12313FKWEFWE");
        echo $settingInstance1->getSetting("app_key");
        echo $settingInstance2->getSetting("app_key");
    </pre>
';

echo '<h6>Output: </h6>';

$settingInstance1 = SingletonServerSettings::getInstance(); 
$settingInstance2 = SingletonServerSettings::getInstance(); 
$settingInstance1->setSetting("app_key", "DQWD21DKW242KFWFwe12313FKWEFWE");
echo "<p>" 
        . "instance1: " . $settingInstance1->getSetting("app_key") . "<newline>"
        . "instance2: " . $settingInstance2->getSetting("app_key") 
    . "</p>";