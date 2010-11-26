<?php
$site_lang = $this->uri->segment(1);
$this->lang->load('site',$site_lang);
?>
<div id="header" class="grid_23">
	<div class="grid_6 push_1"><img src="<?=site_url('public/images/header_logo.gif')?>"></div>
	<div class="prefix_14" style:'border:1px #F00 dotted'>
		<ul class="site_links">
			<li><?=anchor('zhtw',$this->lang->line('site_zhtw'))?></li>
			<li><?=anchor('en',$this->lang->line('site_en'))?></li>
			<li><?=anchor($site_lang.'/sitemap','Sitemap')?></li>
		</ul>
	</div>
</div>

<div id="main_nav" class="grid_23">
	<?=anchor($site_lang.'/news','<img src="'.site_url('public/images/'.$this->lang->line('nav_news').'.gif').'" id="main_nav_news" />');?>
	<img src="<?=site_url('public/images/main_nav_spacer.gif')?>" class="main_nav_spacer">
	<?=anchor($site_lang.'/nodes/27','<img src="'.site_url('public/images/'.$this->lang->line('nav_aboutus').'.gif').'" id="main_nav_aboutus" />');?>
	<img src="<?=site_url('public/images/main_nav_spacer.gif')?>" class="main_nav_spacer">
	<?=anchor($site_lang.'/product/1','<img src="'.site_url('public/images/'.$this->lang->line('nav_prod').'.gif').'" id="main_nav_product" />');?>
	<img src="<?=site_url('public/images/main_nav_spacer.gif')?>" class="main_nav_spacer">
	<?=anchor($site_lang.'/product/2','<img src="'.site_url('public/images/'.$this->lang->line('nav_door').'.gif').'" id="main_nav_door" />');?>
	<img src="<?=site_url('public/images/main_nav_spacer.gif')?>" class="main_nav_spacer">
	<?=anchor($site_lang.'/cases/1','<img src="'.site_url('public/images/'.$this->lang->line('nav_case').'.gif').'" id="main_nav_case" />');?>
	<img src="<?=site_url('public/images/main_nav_spacer.gif')?>" class="main_nav_spacer">
	<?=anchor($site_lang.'/cases/2','<img src="'.site_url('public/images/'.$this->lang->line('nav_case2').'.gif').'" id="main_nav_case2" />');?>
	<img src="<?=site_url('public/images/main_nav_spacer.gif')?>" class="main_nav_spacer">
	<?=anchor($site_lang.'/contact','<img src="'.site_url('public/images/'.$this->lang->line('nav_contact').'.gif').'" id="main_nav_contact" />');?>
	<img src="<?=site_url('public/images/main_nav_spacer.gif')?>" class="main_nav_spacer">
	<?=anchor($site_lang,'<img src="'.site_url('public/images/'.$this->lang->line('nav_home').'.gif').'" id="main_nav_home" />');?>
	<div class="clear"></div>
</div>