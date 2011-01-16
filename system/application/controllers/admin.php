<?php
class Admin extends Controller{
	function __construct(){
		parent::Controller();
	}
	function index(){
		$this->load->view('admin/index');
	}
	function ckupdate(){
		$config['upload_path']='public/files/ckfiles/';
		$config['allowed_types']='gif|jpg|jpeg|png|bmp';
		$config['max_size']='1000';
		$config['max_width']='0';
		$config['max_height']='0';
		$config['encrypt_name']=true;
		$config['remove_spaces']=true;
		$this->load->library('upload',$config);
		$upload = $this->upload->do_upload('upload');
		
		$data=$this->upload->data();
		echo '<script type="text/javascript">';
		echo 'var CKEDITOR_CurrentDialog = (window.parent.CKEDITOR.dialog.getCurrent());';
		echo 'CKEDITOR_CurrentDialog.selectPage(\'info\');';
		echo 'CKEDITOR_CurrentDialog.getContentElement(\'info\', \'txtUrl\').focus();';
		echo 'CKEDITOR_CurrentDialog.setValueOf(\'info\', \'txtUrl\', \''.site_url('public/files/ckfiles/'.$data['file_name']).'\');';
		echo '</script>';
	}
	function get_nodes_title(){
		$this->load->model('taxonomy_model');
		$tmp = $this->taxonomy_model->get_names($this->input->post('category'));
		$res=new stdClass();
		$res->root=$tmp;
		echo json_encode($res);
	}
	function get_node_content(){
		if($this->input->post('type')){
			$this->db->where('type',$this->input->post('type'));
			if($this->input->post('ps') == 'summary'){
				$this->db->where('lang',$this->input->post('lang'));
			}
		}else{
			$this->db->where('id',$this->input->post('id'));
		}
		$query = $this->db->get('nodes');
		$res = new stdClass();
		$res->root = $query->result_array();
		echo json_encode($res);
	}
	function save_node_content(){
		$this->db->where('id',$this->input->post('id'));
		$tmp=array();
		if($this->input->post('title')){
			$tmp['title']=$this->input->post('title');
		}
		$tmp['content']=$this->input->post('content');
		if($this->input->post('content2')){
			$tmp['content2']=$this->input->post('content2');
		}
		$tmp['modified']=date('Y-m-d H:i:s');
		$this->db->update('nodes',$tmp);
		echo '{success:true}';
	}
	function get_prod_pix(){
		$this->db->where('hash_id',$this->input->post('hash_id'));
		$this->db->where('file_type','pix');
		$query = $this->db->get('files');
		$res=new stdClass();
		$res->root = $query->result_array();
		echo json_encode($res);
	}
	function get_taxonomy_list(){
		$params=explode('_',$this->input->post('node'));
		$this->db->where('category',$params[0]);
		$this->db->where('lang',$params[1]);
		$this->db->order_by('weight','ASC');
		$query = $this->db->get('taxonomies');
		$res = array();
		$res['text']="選單項目";
		$res['expanded']=true;
		$res['children']=array();
		
		foreach($query->result_array() as $d){
			$tmp=array();
			$tmp['text']=$d['name'];
			$tmp['leaf']=true;
			$tmp['iconCls']='icon-drag';
			$tmp['id']=$d['id'];
			array_push($res['children'],$tmp);
		}
		echo '['.json_encode($res).']';
	}
	function add_taxo(){
		$this->load->model('taxonomy_model');
		$this->taxonomy_model->add_taxonomy($this->input->post('name'),$this->input->post('category'),$this->input->post('lang'));
		echo '{success:true}';
	}
	function edit_taxo(){
		$tmp=array();
		$tmp['name']=$this->input->post('text');
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('taxonomies',$tmp);
		$query = $this->db->get_where('taxonomies',array('id'=>$this->input->post('id')));
		$res = $query->row_array();
		if($res['category'] == 'product' || $res['category'] == 'product2' || $res['category'] == 'case' || $res['category'] == 'case2'){
			$tmp = array('title'=>$this->input->post('text'));
			$this->db->where('type',$this->input->post('id'));
			$this->db->update('nodes',$tmp);
		}
		echo '{success:true}';
	}
	function delete_taxo(){
		$this->load->model('taxonomy_model');
		$this->taxonomy_model->del_taxonomy($this->input->post('id'));
		echo '{success:true}';
	}
	function sort_taxo(){
		$sort=json_decode($this->input->post('sort'));
		$i=0;
		while($i<count($sort)){
			$tmp=array('weight'=>$i);
			$this->db->where('id',$sort[$i]);
			$this->db->update('taxonomies',$tmp);
			$i++;
		}
		echo '{success:true}';
	}
	function get_news_taxo(){
		$this->db->where('category','news');
		$this->db->where('lang',$this->input->post('lang'));
		$this->db->order_by('weight','asc');
		$query = $this->db->get('taxonomies');
		$res=new stdClass();
		$res->root = $query->result_array();
		echo json_encode($res);
	}
	function news_list(){
		$this->db->select('a.*,b.name as cname');
		$this->db->join('taxonomies as b','a.category=b.id','left');
		$this->db->limit($this->input->post('limit'),$this->input->post('start'));
		$query = $this->db->get('boards as a');
		$res = new stdClass();
		$res->root = $query->result_array();
		echo json_encode($res);
	}
	function news_save(){
		$tmp=array();
		$tmp['title'] = $this->input->post('title');
		$tmp['content'] = $this->input->post('content');
		$tmp['lang'] = $this->input->post('lang');
		$tmp['category'] = $this->input->post('category');
		$tmp['created'] = date('Y-m-d H:i:s');
		$tmp['modified'] = date('Y-m-d H:i:s');
		$this->db->insert('boards',$tmp);
		echo '{success:true}';
	}
	function upload_prod_pix(){
		$config['upload_path']='public/files/';
		$config['allowed_types']='gif|jpg|jpeg|png|bmp';
		$config['max_size']='1000';
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload()){
			$i=1;
			while($i<=5){
				if($this->upload->do_upload('ppix'.$i)){
					$data=$this->upload->data();
					$tmp = array();
					$tmp['name']=$data['file_name'];
					$tmp['file_type']='pix';
					$tmp['category']='product';
					$tmp['hash_id']=$this->input->post('pptype');
					$tmp['created']=date('Y-m-d H:i:s');
					$tmp['modified']=date('Y-m-d H:i:s');
					$this->db->insert('files',$tmp);
					
					$fp=fopen('public/files/debug','a+');
					if($fp){
						fputs($fp,json_encode($data['file_name']).' '.$this->input->post('type')."\n\n");
						fclose($fp);
					}
					
				}
				$i++;
			}
		}
		echo '{success:true}';
	}
}
