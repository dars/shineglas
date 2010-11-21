<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>{page_title}</title>
		<link rel="stylesheet" href="<?=site_url('public/css/960_24_col.css')?>" />
		<link rel="stylesheet" href="<?=site_url('public/css/style.css')?>" />
		<script type="text/javascript" src="<?=site_url('public/js/jquery-1.4.4.min.js')?>"></script>
		<script type="text/javascript" src="<?=site_url('public/js/script.js')?>"></script>
	</head>
	<body>
		<div style="margin-left:auto;margin-right:auto;background:#EEE;width:1024px;border:2px #AAA solid;">
		<div id="container" class="container_24">
		<div id="header" class="grid_23">
			<div class="grid_6 push_1"><img src="<?=site_url('public/images/header_logo.gif')?>"></div>
			<div class="prefix_14" style:'border:1px #F00 dotted'>
				<ul class="site_links">
					<li><?=anchor('#','中文')?></li>
					<li><?=anchor('#','英文')?></li>
					<li><?=anchor('#','Sitemap')?></li>
				</ul>
			</div>
		</div>
		<div id="main_nav" class="grid_23">
			<?=anchor('#','<img src="'.site_url('public/images/main_nav_news.gif').'" id="main_nav_news" />');?>
			<img src="<?=site_url('public/images/main_nav_spacer.gif')?>" class="main_nav_spacer">
			<?=anchor('#','<img src="'.site_url('public/images/main_nav_aboutus.gif').'" id="main_nav_aboutus" />');?>
			<img src="<?=site_url('public/images/main_nav_spacer.gif')?>" class="main_nav_spacer">
			<?=anchor('#','<img src="'.site_url('public/images/main_nav_product.gif').'" id="main_nav_product" />');?>
			<img src="<?=site_url('public/images/main_nav_spacer.gif')?>" class="main_nav_spacer">
			<?=anchor('#','<img src="'.site_url('public/images/main_nav_door.gif').'" id="main_nav_door" />');?>
			<img src="<?=site_url('public/images/main_nav_spacer.gif')?>" class="main_nav_spacer">
			<?=anchor('#','<img src="'.site_url('public/images/main_nav_case.gif').'" id="main_nav_case" />');?>
			<img src="<?=site_url('public/images/main_nav_spacer.gif')?>" class="main_nav_spacer">
			<?=anchor('#','<img src="'.site_url('public/images/main_nav_case2.gif').'" id="main_nav_case2" />');?>
			<img src="<?=site_url('public/images/main_nav_spacer.gif')?>" class="main_nav_spacer">
			<?=anchor('#','<img src="'.site_url('public/images/main_nav_contact.gif').'" id="main_nav_contact" />');?>
			<img src="<?=site_url('public/images/main_nav_spacer.gif')?>" class="main_nav_spacer">
			<?=anchor('#','<img src="'.site_url('public/images/main_nav_home.gif').'" id="main_nav_home" />');?>
			<div class="clear"></div>
		</div>
		<div id="boards" class="grid_23">
			<div style='float:left;margin-right:5px;'>
				<img src="<?=site_url('public/images/main_pix.jpg');?>" style="vertical-align:bottom;margin:5px;">
			</div>
			<div style='margin-left:580px;border:1px #333 dotted;background:#FFF;margin-top:5px;margin-right:5px;padding:5px;padding-top:0'>
				<img src="<?=site_url('public/images/board_news_title.jpg')?>"><br/>
				由於今晚有新一波東北季風進來，氣象局表示，北部、東部、中部地區皆會
				有短暫雨，其他地區則為多雲。今晚明晨北部仍有雨、中南部天氣則會逐漸
				轉好，這周六午後開始北部降雨機率會開始緩和，周日有機會見陽光，中南
				部將是好天氣。
			</div>
		</div>
		<div id="boards_product" class="grid_23">
			<img src="<?=site_url('public/images/board_prod_title.jpg')?>">
			<div><img src="<?=site_url("public/images/tmp_prod.jpg")?>"></div>
			<div><img src="<?=site_url("public/images/tmp_prod.jpg")?>"></div>
			<div><img src="<?=site_url("public/images/tmp_prod.jpg")?>"></div>
			<div><img src="<?=site_url("public/images/tmp_prod.jpg")?>"></div>
			<div><img src="<?=site_url("public/images/tmp_prod.jpg")?>"></div>
			<div><img src="<?=site_url("public/images/tmp_prod.jpg")?>"></div>
			<div><img src="<?=site_url("public/images/tmp_prod.jpg")?>"></div>
			<div><img src="<?=site_url("public/images/agc_logo.jpg")?>"></div>
		</div>
		<div id="boards_door" class="grid_23">
			<img src="<?=site_url('public/images/board_door_title.jpg')?>">
			<div>
				<span class="title">德國 ADS 氣密門</span>
				<hr class="dotted">
				<img src="<?=site_url('public/images/tmp_door.jpg')?>">
			</div>
			<div>
				<span class="title">德國 ADS 氣密門</span>
				<hr class="dotted">
				<img src="<?=site_url('public/images/tmp_door.jpg')?>">
			</div>
			<div>
				<span class="title">德國 ADS 氣密門</span>
				<hr class="dotted">
				<img src="<?=site_url('public/images/tmp_door.jpg')?>">
			</div>
		</div>
		</div>
		<div id="footer" style="text-align:center;"><img src="<?=site_url('public/images/site_footer.jpg');?>"></div>
		</div>
	</body>
</html>
