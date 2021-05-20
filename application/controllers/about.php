<?php

class About extends Controller {

	function __construct()
	{
		parent:: __construct();
	}

	function index()
  {
		$template = $this->loadView('about_view');
		$template->render();
	}

}
?>
