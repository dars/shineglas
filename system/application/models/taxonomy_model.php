<?php
class taxonomy_model extends Model{
	function __construct(){
		parent::Model();
	}
	function get_names($category){
		$this->db->select('id,name');
		$this->db->where('category',$category);
		$this->db->order_by('weight','ASC');
		$res = $this->db->get('taxonomies');
		return $res->result_array();
	}
	function get_names_lang($category){
		$this->db->select('id,name');
		$this->db->where('category',$category);
		$this->db->where('lang',$this->uri->segment(1));
		$this->db->order_by('weight','ASC');
		$res = $this->db->get('taxonomies');
		return $res->result_array();
	}
	function add_taxonomy($name,$category,$lang){
		$tmp=array();
		$tmp['name']=$name;
		$tmp['category']=$category;
		$tmp['lang']=$lang;
		$this->db->insert('taxonomies',$tmp);
		if($category == 'case' || $category == 'case2' || $category == 'product' || $category == 'product2'){
			$tmp = array();
			$tmp['title']=$name;
			$tmp['type']=$this->db->insert_id();
			$tmp['lang']=$lang;
			$tmp['created']=date('Y-m-d H:i:s');
			$tmp['modified']=date('Y-m-d H:i:s');
			$this->db->insert('nodes',$tmp);
		}
	}
	function del_taxonomy($id){
		$this->db->where('id',$id);
		$this->db->delete('taxonomies');
		$this->db->ar_where = array();
		$this->db->where('type',$id);
		$this->db->delete('nodes');
	}
}