<?php

class Portofolio extends Controller {

	function __construct()
	{
		parent:: __construct();
	}

	function index()
  {
		$template = $this->loadView('portofolio_view');
		$template->render();
	}

}
?>
