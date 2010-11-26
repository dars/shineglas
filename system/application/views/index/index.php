<?php
$site_lang = $this->uri->segment(1);
$this->lang->load('site',$site_lang);
?>
<div id="boards" class="grid_23">
	<div style='float:left;margin-right:5px;'>
		<img src="<?=site_url('public/images/main_pix.jpg');?>" style="vertical-align:bottom;margin:5px;">
	</div>
	<div id="news_board">
		<img src="<?=site_url('public/images/'.$this->lang->line('board_title_news'))?>"><br/>
		<?php
			if($news['id']!=0){
				echo anchor($site_lang.'news/view/'.$news['id'],mb_substr(strip_tags($news['content']),0,120,'utf8'));
			}else{
				echo $news['content'];
			}
		?>
	</div>
</div>
<div id="boards_product" class="grid_23">
	<img src="<?=site_url('public/images/'.$this->lang->line('board_title_prod'))?>">
	<?php
		$i=0;
		while($i<count($prod)){
			echo "<div>";
			if($prod[$i]['id']==0){
				echo '<img src="'.site_url('public/images/'.$prod[$i]['name']).'">';
			}else{
				echo anchor($site_lang.'/product/1/'.$prod[$i]['hash_id'],'<img src="'.site_url('public/files/'.$prod[$i]['name']).'" width="210" height="100">');
			}
			echo "</div>";
			$i++;
		}
	?>
    <div><img src="<?=site_url("public/images/agc_logo.jpg")?>"></div>
</div>
<div id="boards_door" class="grid_23">
    <img src="<?=site_url('public/images/'.$this->lang->line('board_title_door'))?>">
    <?php
		$i=0;
		while($i<count($prod2)){
			echo "<div>";
			echo "<span class=\"title\">".$prod2[$i]['title']."</span>";
			echo "<hr class=\"dotted\">";
			if($prod2[$i]['id']==0){
				echo '<img src="'.site_url('public/images/'.$prod2[$i]['name']).'">';
			}else{
				echo anchor($site_lang.'/product/2/'.$prod2[$i]['hash_id'],'<img src="'.site_url('public/files/'.$prod2[$i]['name']).'" width="270" height="110">');
			}
			echo "</div>";
			$i++;
		}
	?>
</div>
<div class="clear"></div>