<?php

class Main extends Controller {

	function __construct()
	{
		parent:: __construct();
	}

	function index()
  {
		$template = $this->loadView('main_view');
		$template->render();
	}

}
?>
