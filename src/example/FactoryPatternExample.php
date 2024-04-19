<?php

namespace App\Example;

use App\Pattern\FactoryPattern\Factory\AppFactory;
use App\Pattern\FactoryPattern\Factory\MobileAppFactory;
use App\Pattern\FactoryPattern\Factory\WebAppFactory;

echo '
    <h4>Factory Pattern</h4>
    <h5>Real World Case</h5>
    <p>
        We are an IT company and we need to create multiple apps for different platforms,
        apps can be web or mobile, but sometimes we dont know the exact platform for
        which will be deployed
    </p>
';

// client Code start
function clientCode(AppFactory $app): string
{
    return $app->deployApp('production');
}
// client Code End

echo '
    <h5>Example a client code to execute deployment</h5>
    <pre>
        function clientCode(AppFactory $app): string
        {
            return $app->deployApp("production");
        }
    </pre>
';

echo '
    <h5>Mobile App Creation</h5>
    <pre>
        echo clientCode(
            new MobileAppFactory(
                "Fitness App",
                "v1.0",
                ".NET MAUI"
            )
        );
    </pre>
';


echo clientCode(
    new MobileAppFactory(
        "Fitness App",
        "v1.0",
        ".NET MAUI"
    )
);

echo '
    <h5>Web App Creation</h5>
    <pre>
        echo clientCode(
            new WebAppFactory(
                "Management App",
                "v1.0",
                "Laravel"
            )
        );
    </pre>
';


echo clientCode(
    new WebAppFactory(
        "Management App",
        "v1.0",
        "Laravel"
    )
);