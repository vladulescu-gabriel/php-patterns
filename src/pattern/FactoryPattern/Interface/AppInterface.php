<?php
namespace App\Pattern\FactoryPattern\Interface;

interface AppInterface {
    public function setAppName(string $app):self;
    public function getAppName():string;
    public function setAppVersion(string $app):self;
    public function getAppVersion():string;
    public function setAppFramework(string $app):self;
    public function getAppFramework():string;
}