<?php

namespace App\Render;
use App\Render\TemplateLoader;

class Router
{
    private $routes;

    public function addRoute(string $route, string $exampleFile): self
    {
        $this->routes[$route] = $exampleFile.".php";

        return $this;
    }

    public function render()
    {
        $request = $_SERVER['REQUEST_URI'];
        
        if (array_key_exists($request, $this->routes)) {
            $routeFile = $this->routes[$request];
            $template = new TemplateLoader($routeFile);
            $template->prepare();
            $template->replace('div', 'replace');
            $template->render();
        } else {
            http_response_code(404);
        }
        
        require __DIR__ . '/template/temp.html';
    }
}