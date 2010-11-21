<?php

class Welcome extends Controller {
	function __construct(){
		parent::Controller();	
	}
	
	function index(){
		$pdata['page_title']="歡迎光臨 祥義玻璃";
		$this->parser->parse('welcome_message',$pdata);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */