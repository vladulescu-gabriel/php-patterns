<?php

namespace App\Render;

class Helper 
{
    const EXAMPLE_PATH = '/example';
    const TEMPLATE_PATH = '/render/template';

    public static function getTemplateFile(string $templateFile): string
    {   
        return $_SERVER['DOCUMENT_ROOT']
            . DIRECTORY_SEPARATOR 
            . self::TEMPLATE_PATH
            . DIRECTORY_SEPARATOR
            . $templateFile;
    }

    public static function getExampleFile(string $exampleFile): string
    {   
        return $_SERVER['DOCUMENT_ROOT']
            . self::EXAMPLE_PATH
            . DIRECTORY_SEPARATOR 
            . $exampleFile;
    }

    public static function getUndefinedExampleMsg(): string
    {
        return '<h4>Example file do not exist</h4>';
    }
}