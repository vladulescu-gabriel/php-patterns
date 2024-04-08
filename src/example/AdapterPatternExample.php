<?php

namespace App\Example;
use App\Pattern\AdapterPattern\Adapter\AppAdapter;
use App\Pattern\AdapterPattern\Service\AppCreatorService;

echo "
    <h4>Adapter Pattern</h4>
    <h5>Real World Case</h5>
    <p>
        <b style='color:red'>
        CASE: We have mobile and web applications, and deployment only for web apps <newline>
        but we need to also deploy a mobile app as web app using the same methods, <newline>
        and the data between them is different, and we need to adapt the data from <newline>
        mobile app, in order to deploy it as a web app
        </b>
        <newline>
        <newline>
        And also, let's say that we already have an interface or abstract methods included in each of the 'web/mobile' models <newline>
        and because of that, we can't change the original clases.
        <newline>
        For this specific case, we have <b style='color:red'>Adapter Pattern</b>, to addapt the data between 2 or more classes
    </p>
";

echo "
    <h5>Data adapted</h5>
    <p>
        MobileApp->packageName to WebApp->appName <newline>
        MobileApp->packageVersion to  WebApp->appVersion <newline>
        MobileApp->language to WebApp->localeLang <newline>
    </p>
";

echo "
    <h5>Client code</h5>
    <p>
        <b>As client code, we made a service (<b style='color:red'>AppCreatorService class</b>)</b>
        in order to have some data mockup for the entities. <newline>
        <b style='color:red'>deployWebApp</b> is the method that deploys webApps, and we need to use adapter 
        pattern (<b style='color:red'>AppAdapter class</b>) in <newline>
        order to also deploy MobileApp as WebApp 
    </p>
";

echo '
    <h5>Create some MockupData</h5>
    <pre>
        $appService = new AppCreatorService();
        $webApp = $appService->createWebApp();
        $mobileApp = $appService->createMobileApp();
    </pre>
';

echo '<h6>Output:</h6>';
    $appService = new AppCreatorService();
    $webApp = $appService->createWebApp();
    $mobileApp = $appService->createMobileApp();

echo "<pre>".var_export($webApp, true)."</pre>";
echo "<pre>".var_export($mobileApp, true)."</pre>";

echo '
    <h5>Deploy Web App</h5>
    <pre>
        $deployWebApp = $appService->deployWebApp($webApp);
    </pre>
';

echo '<h6>Output:</h6>';
    $deployWebApp = $appService->deployWebApp($webApp);
    echo "<pre>".$deployWebApp."</pre>";


echo '
    <h5>Deploy Mobile App</h5>
    <pre>
        $deployMobileApp = $appService->deployWebApp($mobileApp);
    </pre>
    <p>
        This will not work for multiple reasons, one is because <b style="color:red">deployWebApp</b> method <newline>
        accepts only WebAppEntity class, and also getters used in the method are not compatible <newline>
        For example: WebAppEntity has getAppName, MobileAppEntity has getPackageName
    </p>
';

echo '
    <h5>Using adapter class</h5>
    <pre>
        $webAppAdaptedFromMobile = new AppAdapter($mobileApp);
        $deployedMobileAppAsWebApp = $appService->deployWebApp($webAppAdaptedFromMobile);
    </pre>
';

echo '<h6>Output:</h6>';
    $webAppAdaptedFromMobile = new AppAdapter($mobileApp);
    $deployedMobileAppAsWebApp = $appService->deployWebApp($webAppAdaptedFromMobile);
    echo "<pre>".$deployedMobileAppAsWebApp."</pre>";

echo '
    <newline>
    <newline>
    <h5>Adapter Class</h5>
    <pre>
    class AppAdapter extends WebAppEntity
    {
        private MobileAppEntity $mobileApp;
    
        public function __construct(MobileAppEntity $mobileApp)
        {
            $this->mobileApp = $mobileApp;
        }
    
        public function getAppName(): string
        {
           return $this->mobileApp->getPackageName();
        }
    
        public function getAppVersion(): string
        {
           return $this->mobileApp->getPackageVersion();
        }
    
        public function getLocaleLang(): string
        {
           return $this->mobileApp->getLanguage();
        }
    }
    </pre>
';

echo '
    <newline>
    <h5>What Adapter Class does</h5>
    <p>
        Extending class <b style="color:red">WebAppEntity</b> to <b style="color:red">AppAdapter</b> class
        makes <b>AppAdapter a child class of WebAppEntity</b><newline>
        And, passing <b style="color:red">MobileAppEntity</b> to constructor of <b style="color:red">AppAdapter</b>
        creates the posibility to access the Mobile App data in the Adapter class <newline>
        Letting us to rewrite WebAppEntity methods and pass MobileAppEntity data instead
    </p>
    <p> <b style="color:red">This is just an example, there are lots of others cases were it can be used</b></p>
';

echo '<h4>End of Adapter Pattern Example</h4>';