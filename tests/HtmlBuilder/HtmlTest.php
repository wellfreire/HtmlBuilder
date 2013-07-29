<?php // tests/HtmlBuilder/HtmlTest.php

use HtmlBuilder\Html;

/**
 * 
 * @author wellfreire
 * @covers HtmlBuilder\Html
 */
class HtmlTest extends PHPUnit_Framework_TestCase
{
    private $html;
    
    public function __construct() 
    {
        $this->html = new Html();        
    }
    
    public function testItSetsADefaultValidDoctype()
    {
        $html5Doctype = '<!DOCTYPE html>';
        
        $this->assertClassHasAttribute(
                'doctype', 
                get_class($this->html), 
                'The class should have a "doctype" attribute.'
        );
        $this->assertAttributeEquals(
                $html5Doctype, 
                'doctype', 
                $this->html, 
                'The class should set a valid html5 doctype by default.'
        );
    }
    
    public function testCanSetThenRetrieveAnOptionalDoctype() 
    {
        $myDoctype = '<!my doctype>';
        $this->html->setDoctype($myDoctype);
        
        $this->assertEquals(
                $myDoctype, 
                $this->html->getDoctype(), 
                'The returned doctype should be equal to the given one.'
        );
    }
    
    public function testItSetsBrazilianPortugueseAsDefaultHtmlLangAttribute() 
    {
        $defaultLang = 'pt-br';
        
        $this->assertClassHasAttribute(
                'lang', 
                get_class($this->html), 
                'The class should have a "lang" attribute.'
        );
        $this->assertAttributeEquals(
                $defaultLang, 
                'lang', 
                $this->html,
                'The default lang attribute should be set to pt-br.'
        );
    }
    
    public function testCanSetAndGetAnOptionalHtmlLangAttributeValue() 
    {
        $attrLang = 'en';
        $this->html->setLang($attrLang);

        $this->assertEquals(
                $attrLang, 
                $this->html->getLang(),
                'It should set and return an optional html attr lang.'
        );
    }    
    
    public function testItRendersADefaultValidHtml5Markup() 
    {
        $defaultValidHtml = array(
            '<!DOCTYPE html>',
            '<html lang="pt-br">',
                '<head>',
                    '<title>&nbsp;</title>',
                '</head>',
                '<body>',
                '</body>',
            '</html>',
        );
        
        $this->assertEquals(
                implode('',$defaultValidHtml), 
                $this->html->render(), 
                'A valid default html markup should be rendered!'
        );
    }
}
/*
 * End of file: tests/HtmlBuilder/Block/HtmlTest.php
 */