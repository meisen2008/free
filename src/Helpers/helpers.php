<?php
namespace Helpers;

class Helpers{
	private $params = [];
	public function __get($property_name)
	{
		return $this->params[$property_name] ?? "no_value";
	}

	public function __set($property_name,$property_value)
	{

		$this->params[$property_name] = $property_value;

	}
}

