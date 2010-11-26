<?php
class Contact extends Controller{
	function __construct(){parent::Controller();}
	function index(){
		$this->load->helper('form');
		$data=array();
		$pdata['page_title'] = "聯絡我們 - 祥義玻璃";
		$pdata['page_content'] = $this->parser->parse('contact/main',$data,true);
		$this->parser->parse('layout/main',$pdata);
	}
	function send_mail(){
		$this->load->library('email');
		
		$config['useragent']="DJStudio";
		$config['protocol']="smtp";
		$config['smtp_host']="ssl://smtp.gmail.com";
		$config['smtp_user']="dars94@gmail.com";
		$config['smtp_pass']="dars8194";
		$config['smtp_port']=465;
		$config['charset']="utf-8";
		$config['mailtype']="html";
		$config['newline']= "\r\n";
		$config['crlf']="\r\n";
		
		/*
		$config['protocol']="smtp";
		$config['smtp_host']="efg.com.tw";
		$config['smtp_user']="contact@efg.com.tw";
		$config['smtp_pass']="contact";
		$config['smtp_port']=25;
		*/
		$config['smtp_timeout']=5;
		$this->email->initialize($config);
		
		$this->email->from('dars94@gmail.com','迪傑工作室');
		//$this->email->from('contact@efg.com.tw','霖亞帷幕');
		
		$this->email->to('dars94@gmail.com,dars@dars.idv.tw');
		//$this->email->subject($this->input->post('title'));
		$title = $this->input->post('mail_title');		
		$this->email->subject($title);
		
		$data['name']=$this->input->post('name');
		$data['tel1']=$this->input->post('tel1');
		$data['tel2']=$this->input->post('tel2');
		$data['email']=$this->input->post('email');
		$data['content']=$this->input->post('content');
		$msg=$this->parser->parse("email/email",$data,true);
		$this->email->message($msg);
		
		$this->email->send();
		
		
	}
}