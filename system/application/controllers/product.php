<?php
class Product extends Controller{
	function __construct(){parent::Controller();}
	function index(){
		if($this->uri->segment(3) == '1'){
			$pdata['page_title']='玻璃產品 - 祥義玻璃';
			$tmp_str="product";
		}else if($this->uri->segment(3) == '2'){
			$pdata['page_title']='氣密門窗/玻璃五金 - 祥義玻璃';
			$tmp_str="product2";
		}
		$query = $this->db->query("SELECT a.*,b.weight FROM nodes as a LEFT JOIN taxonomies as b ON a.type = b.id WHERE a.type IN(SELECT id FROM taxonomies WHERE category='".$tmp_str."' and lang='".$this->uri->segment(1)."') ORDER BY b.weight ASC");
		if($query->num_rows()>0){
			$res = $query->result_array();
			$data=array();
			$data['prod']=$res;
			if($this->uri->segment(4)){
				$num=$this->uri->segment(4);
			}else{
				$num=$res[0]['type'];
			}
			$this->db->where('hash_id',$num);
			$query = $this->db->get('files');
			$res = $query->result_array();
			$data['pix']=$res;
			$pdata['page_content']=$this->parser->parse('product/main',$data,true);
		}else{
			$pdata['page_content']='';
		}
		$this->parser->parse('layout/main',$pdata);
	}
}