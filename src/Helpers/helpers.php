<?php
namespace Helpers;

public $params = [];
class Helpers{
	public function __get($property_name)
	{
		retrun $this->params[$property_name] ?? "no_value";
	}

	public function __set($property_name,$property_value)
	{

		$this->$params[$property_name] = $property_value;

	}
}

