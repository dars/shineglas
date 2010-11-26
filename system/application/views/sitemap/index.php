<?php
$site_lang = $this->uri->segment(1);
$this->lang->load('site',$site_lang);
?>
<div class="sitemap">
	<h2>Sitemap</h2>
	<ul id="utilityNav">
		<li><?=anchor('zhtw','中文版')?></li>
		<li><?=anchor('en','English')?></li>
		<li><?=anchor($site_lang.'/sitemap','Sitemap')?></li>
	</ul>
	<ul id="primaryNav" class="col8">
		<li id="home"><?=anchor($site_lang,$this->lang->line('home_str'))?></li>
		<li><?=anchor($site_lang.'/news',$this->lang->line('news_str'))?>
			<?php
				if(count($news)>0){
					echo "<ul>";
					foreach($news as $i):
						echo "<li>".anchor($site_lang."/news/".$i['id'],$i['name'])."</li>";
					endforeach;
					echo "</ul>";
				}
			?>
			</li>
		<li><?=anchor($site_lang.'/nodes/27',$this->lang->line('aboutus_str'))?></li>
		<li><?=anchor($site_lang.'/product/1',$this->lang->line('prod_str'))?>
			<?php
				if(count($prod)>0){
					echo "<ul>";
					foreach($prod as $i):
						echo "<li>".anchor($site_lang."/product/1/".$i['id'],$i['name'])."</li>";
					endforeach;
					echo "</ul>";
				}
			?>
			</li>
		<li><?=anchor($site_lang.'/product/2',$this->lang->line('door_str'))?>
			<?php
				if(count($prod2)>0){
					echo "<ul>";
					foreach($prod2 as $i):
						echo "<li>".anchor($site_lang."/product/2/".$i['id'],$i['name'])."</li>";
					endforeach;
					echo "</ul>";
				}
			?>
			</li>
		<li><?=anchor($site_lang.'/cases/1',$this->lang->line('case_str'))?>
			<?php
				if(count($case)>0){
					echo "<ul>";
					foreach($case as $i):
						echo "<li>".anchor($site_lang."/cases/1/".$i['id'],$i['name'])."</li>";
					endforeach;
					echo "</ul>";
				}
			?>
			</li>
		<li><?=anchor($site_lang.'/cases/2',$this->lang->line('case2_str'))?>
			<?php
				if(count($case2)>0){
					echo "<ul>";
					foreach($case2 as $i):
						echo "<li>".anchor($site_lang."/cases/2/".$i['id'],$i['name'])."</li>";
					endforeach;
					echo "</ul>";
				}
			?>
			</li>
		<li><?=anchor($site_lang.'/contact',$this->lang->line('contact_str'))?></li>
	</ul>
</div>