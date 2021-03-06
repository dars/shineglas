<?php
class Cases extends Controller{
	function __construct(){parent::Controller();}
	function index(){
		if($this->uri->segment(3) == '1'){
			$pdata['page_title']='專題報導 - 祥義玻璃';
			$tmp_str="case";
		}else if($this->uri->segment(3) == '2'){
			$pdata['page_title']='使用案例 - 祥義玻璃';
			$tmp_str="case2";
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
			$this->db->where('type',$num);
			$query = $this->db->get('nodes');
			$res = $query->result_array();
			$data['content']=$res[0]['content'];
			$data['title']=$res[0]['title'];
			$pdata['page_content']=$this->parser->parse('cases/main',$data,true);
		}else{
			$pdata['page_content']='';
		}
		$this->parser->parse('layout/main',$pdata);
	}
}