<?php

namespace App\Models;


class Index 
{
	private $app; 

	function __construct($app = NULL)
	{
		$this->app = $app;
	}
	
	public function holaMundo()
	{
		return "hola mundo!";
	}

}

?>