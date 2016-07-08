<?php

namespace Acme;

class HtmlOutput implements SalesOutputInterface
{
	public function output($sales)
	{
		return '<h1>Sales: ' . $sales . '</h1>';
	}
}