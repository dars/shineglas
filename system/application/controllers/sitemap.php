<?php
class Sitemap extends Controller{
	function __construct(){parent::Controller();}
	function index(){
		$data=array();
		$this->load->model('taxonomy_model');
		$data['news']=$this->taxonomy_model->get_names_lang('news');
		$data['case']=$this->taxonomy_model->get_names_lang('case');
		$data['case2']=$this->taxonomy_model->get_names_lang('case2');
		$data['prod']=$this->taxonomy_model->get_names_lang('product');
		$data['prod2']=$this->taxonomy_model->get_names_lang('product2');
		$pdata['pdata']="Sitemap";
		$pdata['page_title']='Sitemap';
		$pdata['page_content']=$this->parser->parse("sitemap/index",$data,true);
		$this->parser->parse("layout/main",$pdata);
	}
}