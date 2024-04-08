<?php

namespace App\Render;
use DOMDocument;
use Exception;

class TemplateLoader
{
    const TEMPLATE_FILE = 'template.html';
    const TEMPLATE_CSS_FILE = 'template.css';
    const TEMPLATE_TEMP_FILE = 'temp.html';
    const REPLACE_TAG_HTML = 'div';
    const REPLACE_ID_HTML = 'replace';
    const REPLACE_TAG_CSS = 'style';

    private $htmlDoc;
    private $exampleContent;
    private $exampleCSSContent;

    public function __construct(string $exampleFile)
    {
        $path = Helper::getExampleFile($exampleFile);

        if (!file_exists($path)) {
            $this->exampleContent = Helper::getUndefinedExampleMsg();
        } else {
            ob_start();
            include($path);
            $content = ob_get_contents(); 
            ob_end_clean();
            $this->exampleContent = $content;
        }

        $path = Helper::getTemplateFile(self::TEMPLATE_CSS_FILE);
        ob_start();
        include($path);
        $content = ob_get_contents(); 
        ob_end_clean();
        $this->exampleCSSContent = $content;
    }

    public function prepare()
    {
        $path = Helper::getTemplateFile(self::TEMPLATE_FILE);
        $this->htmlDoc = new DOMDocument();
        $this->htmlDoc->loadHTMLFile($path);
    }

    public function replace(string $tag, string $tagId): void
    {
        $nodes = $this->htmlDoc->getElementsByTagName($tag);

        foreach ($nodes as $node) {
            foreach ($node->attributes as $attr) {
                if ($attr->textContent === $tagId) {
                    $template = $this->htmlDoc->createDocumentFragment();
                    $content = str_replace(array("<newline>"), "<br />", $this->exampleContent);

                    if (empty($content)) {
                        $content = 'Example file do not have content to render';
                    }

                    $template->appendXML($content);
                    $node->appendChild($template);
                }
            }
        }
    }

    public function replaceCSS(string $tag): void
    {
        $nodes = $this->htmlDoc->getElementsByTagName($tag);
        $node = $nodes->item(0);
        
        $template = $this->htmlDoc->createDocumentFragment();
        $template->appendXML($this->exampleCSSContent);
        $node->appendChild($template);
    }

    public function render()
    {
        $path = Helper::getTemplateFile(self::TEMPLATE_TEMP_FILE);
        $this->htmlDoc->saveHTMLFile($path);
    }
}