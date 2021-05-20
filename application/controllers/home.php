<?php

class Home extends Controller {

	function __construct()
	{
		parent:: __construct();
	}

	function index()
  {
		$template = $this->loadView('home_view');
		$template->render();
	}

}
?>
