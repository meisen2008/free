<?php
namespace Helpers\Helpers;

class goods{
	private $params = [];
	public function __get($property_name)
	{
		return $this->params[$property_name] ?? "no_value";
	}

	public function __set($property_name,$property_value)
	{

		$this->params[$property_name] = $property_value;

	}

	public function __call($name,$arguments)
	{
		echo $name."goods不存在"."<br/>";
		var_dump($arguments);

	}

	public function hao()
	{
		echo "hao999";
	}
}

