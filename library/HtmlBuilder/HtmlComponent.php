<?php // HtmlBuilder/HtmlComponent.php

namespace HtmlBuilder;

/**
 * Html Component - Interface
 * 
 * Defines the interface that all the HTML components must implement
 * 
 * @author Wellington Freire <contato@wellfreire.com.br>
 */
interface HtmlComponent
{
    /**
     * - Renders the respective component 
     */
    function render();
}