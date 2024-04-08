<?php

namespace App\Render;
use App\Render\TemplateLoader;

class Router
{
    const ROUTE_FILE_EXTENSION = '.php';
    private $routes;

    public function addRoute(string $route, string $exampleFile): self
    {
        $this->routes[$route] = $exampleFile.self::ROUTE_FILE_EXTENSION;

        return $this;
    }

    public function render()
    {
        $request = $_SERVER['REQUEST_URI'];
        
        if (array_key_exists($request, $this->routes)) {
            $routeFile = $this->routes[$request];
            $template = new TemplateLoader($routeFile);
            $template->prepare();
            $template->replace(TemplateLoader::REPLACE_TAG_HTML, TemplateLoader::REPLACE_ID_HTML);
            $template->replaceCSS(TemplateLoader::REPLACE_TAG_CSS);
            $template->render();
        } else {
            http_response_code(404);
        }
        
        require Helper::getTemplateFile(TemplateLoader::TEMPLATE_TEMP_FILE);
    }
}