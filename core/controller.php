<?php

class Controller {
	public function __construct()
	{
		global $config;
	}

	/***** Load View *****/
	public function loadView($name)
	{
		$view = new View($name);
		return $view;
	}
}
?>
