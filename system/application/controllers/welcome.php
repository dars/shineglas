<?php

class Welcome extends Controller {
	function __construct(){
		parent::Controller();	
	}
	
	function index(){
		$site_lang = $this->uri->segment(1);
		$this->lang->load('site',$site_lang);
		$site_lang = $this->uri->segment(1);
		$this->lang->load('site',$site_lang);	
		$this->load->model('news_model');
		$data=array();
		$data['site_lang']=$site_lang;
		$data['news']=$this->news_model->get_one_news($site_lang);
		$this->load->model('product_model');
		$data['prod']=$this->product_model->get_product_list('product');
		$data['prod2']=$this->product_model->get_product_list('product2');
		$pdata['page_title']="歡迎光臨 祥義玻璃";
		$pdata['page_content']=$this->parser->parse('index/index',$data,true);
		$this->parser->parse('layout/main',$pdata);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */