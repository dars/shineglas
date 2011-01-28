<?php
$site_lang = $this->uri->segment(1);
if($site_lang != 'zhtw' && $site_lang != 'en'){
	echo "<script type='text/javascript'>location.href = '".site_url('zhtw')."';</script>";
}
$this->lang->load('site',$site_lang);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>{page_title}</title>
		<link rel="stylesheet" href="<?=site_url('public/css/960_24_col.css')?>" />
		<link rel="stylesheet" href="<?=site_url('public/css/tab.css')?>" />
		<link rel="stylesheet" href="<?=site_url('public/css/scrollimage.css')?>" />
		<link rel="stylesheet" href="<?=site_url('public/css/slickmap.css')?>" />
		<link rel="stylesheet" href="<?=site_url('public/css/style.css')?>" />

		<script type="text/javascript">
		var main_nav_news = new Image();
		main_nav_news.src="<?=site_url('public/images/'.$this->lang->line('nav_news').'.gif')?>";
		var main_nav_news_a = new Image();
		main_nav_news_a.src="<?=site_url('public/images/'.$this->lang->line('nav_news').'_a.gif')?>";
		var main_nav_aboutus = new Image();
		main_nav_aboutus.src="<?=site_url('public/images/'.$this->lang->line('nav_aboutus').'.gif')?>";
		var main_nav_aboutus_a = new Image();
		main_nav_aboutus_a.src="<?=site_url('public/images/'.$this->lang->line('nav_aboutus').'_a.gif')?>";
		var main_nav_product = new Image();
		main_nav_product.src="<?=site_url('public/images/'.$this->lang->line('nav_prod').'.gif')?>";
		var main_nav_product_a = new Image();
		main_nav_product_a.src="<?=site_url('public/images/'.$this->lang->line('nav_prod').'_a.gif')?>";
		var main_nav_door = new Image();
		main_nav_door.src="<?=site_url('public/images/'.$this->lang->line('nav_door').'.gif')?>";
		var main_nav_door_a = new Image();
		main_nav_door_a.src="<?=site_url('public/images/'.$this->lang->line('nav_door').'_a.gif')?>";
		var main_nav_case = new Image();
		main_nav_case.src="<?=site_url('public/images/'.$this->lang->line('nav_case').'.gif')?>";
		var main_nav_case_a = new Image();
		main_nav_case_a.src="<?=site_url('public/images/'.$this->lang->line('nav_case').'_a.gif')?>";
		var main_nav_case2 = new Image();
		main_nav_case2.src="<?=site_url('public/images/'.$this->lang->line('nav_case2').'.gif')?>";
		var main_nav_case2_a = new Image();
		main_nav_case2_a.src="<?=site_url('public/images/'.$this->lang->line('nav_case2').'_a.gif')?>";
		var main_nav_contact = new Image();
		main_nav_contact.src="<?=site_url('public/images/'.$this->lang->line('nav_contact').'.gif')?>";
		var main_nav_contact_a = new Image();
		main_nav_contact_a.src="<?=site_url('public/images/'.$this->lang->line('nav_contact').'_a.gif')?>";
		var main_nav_home = new Image();
		main_nav_home.src="<?=site_url('public/images/'.$this->lang->line('nav_home').'.gif')?>";
		var main_nav_home_a = new Image();
		main_nav_home_a.src="<?=site_url('public/images/'.$this->lang->line('nav_home').'_a.gif')?>";
		</script>
		<script type="text/javascript" src="<?=site_url('public/js/jquery-1.4.4.min.js')?>"></script>
		<script type="text/javascript" src="<?=site_url('public/js/jquery.tools.min.js')?>"></script>
		<script type="text/javascript" src="<?=site_url('public/js/script.js')?>"></script>
	</head>
	<body>
		<div style="margin-left:auto;margin-right:auto;background:#EEE;width:1024px;border:2px #AAA solid;">
			<div id="container" class="container_24">
				<div class="grid_24 main_content">
					<?php $this->load->view('layout/header')?>
					{page_content}
				</div>
				<div class="clear"></div>
			</div>
			<div id="footer" style="text-align:center;">
				<div id="comp_address"><?=$this->lang->line('comp_addr')?></div>
				<div id="comp_copyright"><?=$this->lang->line('comp_copy')?></div>
				<div id="gotop"><a href="#header">GO TOP</a></div>
			</div>
		</div>
	</body>
</html>
