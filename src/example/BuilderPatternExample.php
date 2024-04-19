<?php

namespace App\Example;
use App\Pattern\BuilderPattern\Builder\BlogAppBuilder;
use App\Pattern\BuilderPattern\Builder\ProjectManagementAppBuilder;
use App\Pattern\BuilderPattern\Director\AppDirector;

echo '
    <h4>Builder Pattern</h4>
    <h5>Real World Case</h5>
    <p>
        We are an IT company and we need to create custom websites for every client
        And for that, we need the app structure for every customer with his app needs
        In order to be more simple for us, we are using the builder pattern in order
        to create custom apps faster, starting sets of data that are already defined
        and customize them for our needs
    </p>
';

echo '
    <h5>Using Direct Builder</h5>
    <pre>
        $builder = new BlogAppBuilder;
        $builder->setFramework()
            ->setAuth()
            ->setLogin()
            ->setAuthorization()
            ->setAppProps();
    </pre>
';

$builder = new BlogAppBuilder();
$builder->setFramework()
    ->setAuth()
    ->setLogin()
    ->setAuthorization()
    ->setAppProps();

echo '<h5>Result:</h5>';
echo '<pre>' . var_export($builder, true) . '</pre>';


echo '
    <h5>Using Direct Builder with Custom Data</h5>
    <pre>
        $builder = new BlogAppBuilder();
        $builder->setFramework()
            ->setAuth()
            ->setLogin()
            ->setAuthorization()
            ->setAppProps();
        
        $builder->getApp()
            ->getFramework()
            ->setBackendORM("Doctrine");
    </pre>
';


$builder = new BlogAppBuilder();
$builder->setFramework()
    ->setAuth()
    ->setLogin()
    ->setAuthorization()
    ->setAppProps();

$builder->getApp()
    ->getFramework()
    ->setBackendORM('Doctrine');

echo '<h5>Result:</h5>';
echo '<pre>' . var_export($builder, true) . '</pre>';


echo '
    <h5>Using Secondary Builder to create the same object with diffrent data</h5>
    <pre>
        $builder = new ProjectManagementAppBuilder();
        $builder->setFramework()
            ->setAuth()
            ->setLogin()
            ->setAuthorization()
            ->setAppProps();
    </pre>
';
$builder = new ProjectManagementAppBuilder();
$builder->setFramework()
    ->setAuth()
    ->setLogin()
    ->setAuthorization()
    ->setAppProps();

echo '<h5>Result:</h5>';
echo '<pre>' . var_export($builder, true) . '</pre>';
