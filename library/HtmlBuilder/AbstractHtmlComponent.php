<?php // HtmlBuilder/AbstractHtmlComponent.php

namespace HtmlBuilder;

/**
 * AbstractHtmlComponent
 *
 * Base html component class from which 
 * all the other ones must inherit
 */
abstract class AbstractHtmlComponent implements HtmlComponent
{
	public function __toString()
	{
		return $this->render();
	}
}

/*
 * End of file: HtmlBuilder/AbstractHtmlComponent.php
 */