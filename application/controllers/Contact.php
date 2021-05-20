<?php

class Contact extends Controller {

	function __construct()
	{
		parent:: __construct();
	}

	function index()
  {
		$template = $this->loadView('contact_view');
		$template->render();
	}

}
?>
