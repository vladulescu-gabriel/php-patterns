<?php

namespace App\Example;
use App\Pattern\DecoratorPattern\Service\ClientCode;
$clientCode = new ClientCode();

echo "
    <h4>Decorator Pattern</h4>
    <h5>Real World Case</h5>
    <p>
        
    </p>
";

echo '<h6>Output:</h6>';
    $app = $clientCode->exportAppJSON();

echo "<p>Main App</p>";
echo "<pre>".var_export($app->main, true)."</pre>";

echo "<p>Exported App</p>";
echo "<pre>".var_export($app->custom, true)."</pre>";