<?php

namespace App\Example;
use App\Pattern\SingletonPattern\SingletonServerSettings;

echo "
    <h4>Singleton Pattern</h4>
    <h5>Real World Case</h5>
    <p>
        <b style='color:red'>
        CASE: We have multiple settings in our app, and we need to access them more easly <newline>
        preserving a single instance with all our configurations over the app <newline>
        </b>
        <newline>
        <newline>
            <b>Posibility</b><newline>
            We can have a single singleton instance (class), were we also define some functionality <newline>
            or <newline>
            A main singleton instance that has other subclasses ( like in our example ) <newline>
        <newline>
            <b>Note</b><newline>
            For the case of using singleton subclasses, constructor needs to be always protected in order to extend it <newline>
            Will be used only as private if we have a single singleton class <newline>
            Method for initiating the instance and storing it as variable, will be always <b style='color:red'>public static</b> <newline>
        <newline>
    </p>
";

echo '
    <h5>Singleton Main Instance</h5>
    <pre>
    class SingletonInstance
    {
        private static $instances = [];
    
        protected function __construct() { }
    
        public static function getInstance()
        {
            $subclass = static::class;
            if (!isset(self::$instances[$subclass])) {
                self::$instances[$subclass] = new static();
            }
            return self::$instances[$subclass];
        }
    }
    </pre>
';

echo '
    <h5>Subclass of Singleton - Server Settings</h5>
    <pre>
    class SingletonServerSettings extends SingletonInstance
    {
        private array $settings = [];
    
        public function getSetting(string $key): string
        {
            return $this->settings[$key];
        }
    
        public function setSetting(string $key, string $value): void
        {
            $this->settings[$key] = $value;
        }
    }
    </pre>
';

echo '
    <h5>Initiating instance and check if is the same one</h5>
    <pre>
        $serverSettings = SingletonServerSettings::getInstance(); 
        $serverSettings2 = SingletonServerSettings::getInstance(); 

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
    <h5>Adding a new setting and check if are on the same instance</h5>
    <pre>
        $settingInstance1 = SingletonServerSettings::getInstance(); 
        $settingInstance2 = SingletonServerSettings::getInstance(); 
        $settingInstance1->setSetting("app_key", "DQWD21DKW242KFWFwe12313FKWEFWE");
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

echo '
    <h5>Updating both instance ( is the same instance )</h5>
    <pre>
        $settingInstance1 = SingletonServerSettings::getInstance(); 
        $settingInstance2 = SingletonServerSettings::getInstance(); 

        $settingInstance1->setSetting("app_key", "DQWD21DKW242KFWFwe12313FKWEFWE");
        $settingInstance2->setSetting("app_key", "ERLG234QFMDLQW13423FWEMKLER53t3423");
    </pre>
    <p>
        <b>SingletonServerSettings instance will have the last value added, of "ERLG234QFMDLQW13423FWEMKLER53t3423"</b>
    </p>
';

echo '<h6>Output: </h6>';
    $settingInstance1 = SingletonServerSettings::getInstance(); 
    $settingInstance2 = SingletonServerSettings::getInstance();

    $settingInstance1->setSetting("app_key", "DQWD21DKW242KFWFwe12313FKWEFWE");
    $settingInstance2->setSetting("app_key", "ERLG234QFMDLQW13423FWEMKLER53t3423");
    echo "<p>" 
        . "instance1: " . $settingInstance1->getSetting("app_key") . "<newline>"
        . "instance2: " . $settingInstance2->getSetting("app_key") 
    . "</p>";


echo '
    <newline>
    <h5>What Singleton Class does</h5>
    <p>
        When SingletonServerSettings becomes a child class (subclass) of SingletonInstance (through extension) <newline>
        the SingletonServerSettings class, inherits the getInstance method of SingletonInstance, and when is called <newline>
        from the subclass (SingletonServerSettings::getInstance()) it adds a global instance of it, in $instances variable of SingletonInstance <newline>
        From which we can use the SingletonServerSettings instance as global, everywhere within the app
    </p>
    <p> <b style="color:red">This is just an example, there are lots of others cases were it can be used</b></p>';

echo "<h4>End of Singleton Pattern Example</h4>";