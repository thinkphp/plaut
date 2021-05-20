<?php

class Projects extends Controller {

	function __construct()
	{
		parent:: __construct();
	}

	function index()
  {
		$template = $this->loadView('projects_view');

		$template->render();
	}

}
?>
