<?php
namespace Helpers;
use Helpers\goods;
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

	public function __call($name,$arguments)
	{
		echo $name."不存在33"."<br/>";
		var_dump($arguments);
		$goods = new goods();
		call_user_func_array([$goods,$name], $arguments);

	}
}

