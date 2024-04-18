<?php

namespace App\Example;
use App\Pattern\BridgePattern\Service\ClientCodeService;
$clientCode = new ClientCodeService();

echo "
    <h4>Bridge Pattern</h4>
    <h5>Real World Case</h5>
    <p>

    </p>
";


echo '<h6>Output:</h6>';
    $mobileApp = $clientCode->createMobileApp();

echo "<pre>".var_export($mobileApp, true)."</pre>";

echo '<h6>Output:</h6>';
    $webApp = $clientCode->createWebApp();

echo "<pre>".var_export($webApp, true)."</pre>";