<?php

class Errors extends Controller {
	
	function index()
	{
		$this->ctrl404();
	}
	
	function ctrl404()
	{
		echo '<h1>404 Error</h1>';
		echo '<p>This page is not available at the moment</p>';
	}
    
}
?>
