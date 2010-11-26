<?php
class Nodes extends Controller{
	function __construct(){parent::Controller();}
	function index(){
		$this->db->where('id',$this->uri->segment(3));
		$query = $this->db->get('nodes');
		$res = $query->result_array();
		$data = $res[0];
		$pdata['page_title'] = $data['title']." - 祥義玻璃";
		$pdata['page_content']=$this->parser->parse('index/node',$data,true);
		$this->parser->parse('layout/main',$pdata);
	}
}