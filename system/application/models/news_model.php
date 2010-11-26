<?php
class News_model extends Model{
	function __construct(){parent::Model();}
	function get_res($num,$offset){
		$site_lang = $this->uri->segment(1);
		$this->lang->load('site',$site_lang);
		$this->db->select('a.*,b.name as cname');
		$this->db->join('taxonomies as b','a.category=b.id','left');
		$this->db->where('a.lang',$site_lang);
		$this->db->order_by('a.id','desc');
		$query = $this->db->get('boards as a',$num,$offset);
		return $query->result_array();
	}
	function get_one_news($lang){
		$this->db->where('lang',$lang);
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
		$query = $this->db->get('boards');
		$res = $query->result_array();
		if(count($res)>0){
			return $res[0];
		}else{
			return $tmp=array('id'=>0,'content'=>'no news');
		}
	}
}