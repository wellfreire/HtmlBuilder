<?php // HtmlBuilder/Html.php

namespace HtmlBuilder;

use HtmlBuilder\Block as HtmlBlock;

/**
 * HTML - The HTML Page component 
 * 
 * Responsible for the entire html page to be rendered
 * 
 * @author Wellington Freire <contato@wellfreire.com.br>
 */
class Html implements HtmlComponent
{
    /**
     * The HTML code
     * 
     * @var string
     */
    private $html;
    
    /**
     * The HTML doctype
     * 
     * @var string
     */
    private $doctype = '<!DOCTYPE html>';
        
    /**
     * The html lang attribute. Defaults to 'pt-br'
     * 
     * @var string
     */
    private $lang = 'pt-br';
    
    
    /**
     * Constructor
     */
    public function __construct() 
    {

    }
    
    /**
     * Render
     * 
     * @see \Ideal\View\Html\HtmlComponent::render()
     */
    public function render()
    {
        $this->build();
        return $this->html;
    }
    
    /**
     * Builds the html markup and stores it in the html class property
     * 
     * @return void
     */
    private function build() 
    {
        $this->html = implode('', array(
            '<!DOCTYPE html>',
            '<html lang="'.$this->lang.'">',
                '<head>',
                    '<title>&nbsp;</title>',
                '</head>',
                '<body>',
                '</body>',
            '</html>'
        ));
    }

    /**
     * Sets the html doctype tag
     * 
     * @param string $doctype
     */
    public function setDoctype($doctype)
    {
        $this->doctype = $doctype;
    }
    
    /**
     * Returns the current html doctype tag
     */
    public function getDoctype() 
    {
        return $this->doctype;
    }

    /**
     * Sets the html lang attribute.
     * 
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }
    
    /**
     * Returns the current html lang attribute value
     */
    public function getLang() 
    {
        return $this->lang;
    }
}

/*
 * End of file: HtmlBuilder/Block/Html.php
 */