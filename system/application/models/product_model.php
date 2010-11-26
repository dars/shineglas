<?php
class Product_model extends Model{
	function __construct(){parent::Model();}
	function get_product_list($type=''){
		if($type == 'product'){
			$tmp_ar=array('id'=>0,'name'=>'no_image_prod.png','hash_id'=>0);
			$limit = 7;
		}else if($type == 'product2'){
			$tmp_ar=array('id'=>0,'name'=>'no_image_prod2.png','hash_id'=>0,'title'=>'目前尚無資料');
			$limit =3;
		}
		$query_str = "SELECT MIN(a.id) as id,a.name,a.hash_id,b.content,b.title 
				  FROM files as a
				  LEFT JOIN nodes as b ON a.hash_id = b.type
				  WHERE a.hash_id IN(SELECT id FROM taxonomies WHERE category='".$type."')
				  GROUP BY a.hash_id
				  LIMIT ".$limit;
		$query = $this->db->query($query_str);
		$res = $query->result_array();
		$less = $limit-count($res);
		
		$i=0;
		while($i<$less){
			array_push($res,$tmp_ar);
			$i++;
		}
		return $res;
	}
}