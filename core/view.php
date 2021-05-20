<?php

class View {

	private $pageVars = array();
	private $template;

	public function __construct( $template )
	{
		$this->template = APP_DIR .'views/'. $template .'.php';
	}

	public function set($params, $val = null)
	{
		if(is_array($params))
		{
			foreach($params as $param => $val)
			{
				$this->pageVars[$param] = $val;
			}
		}
		else
		{
			$this->pageVars[$params] = $val;
		}
	}

	public function render()
	{
		extract($this->pageVars);

		ob_start();
		require($this->template);
		echo ob_get_clean();
	}

}
?>
