<?php

namespace App\Render;
use DOMDocument;

class TemplateLoader
{
    const BASE_TEMPLATE = '/template/template.html';
    const TEMP_TEMPLATE = '/template/temp.html';
    private $htmlDoc;
    private $exampleContent;

    public function __construct(string $exampleFile)
    {
        $path = realpath(dirname(__FILE__).'/../example/'.$exampleFile);
        ob_start();
        include($path);
        $content = ob_get_contents(); 
        ob_end_clean();
        $this->exampleContent = $content;
    }

    public function prepare()
    {
        $path = realpath(dirname(__FILE__).self::BASE_TEMPLATE);
        $this->htmlDoc = new DOMDocument();
        $this->htmlDoc->loadHTMLFile($path);
    }

    public function replace(string $tag, string $tagId)
    {
        $nodes = $this->htmlDoc->getElementsByTagName($tag);

        foreach ($nodes as $node) {
            foreach ($node->attributes as $attr) {
                if ($attr->textContent === $tagId) {
                    $template = $this->htmlDoc->createDocumentFragment();
                    $content = str_replace(array("<newline>"), "<br />", $this->exampleContent);

                    $template->appendXML($content);
                    $node->appendChild($template);
                }
            }
        }
        
        return null;
    }

    public function render()
    {
        $path = realpath(dirname(__FILE__).self::TEMP_TEMPLATE);
        $this->htmlDoc->saveHTMLFile($path);
    }
}