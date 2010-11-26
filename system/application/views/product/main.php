<?php
$site_lang = $this->uri->segment(1);
$this->lang->load('site',$site_lang);
if($this->uri->segment(4)){
	$num = $this->uri->segment(4);
}else{
	$num = 0;
}
?>
<script type="text/javascript">
$(function(){
	$('ul.tabs').tabs("div.panes>div", {effect: 'fade', fadeOutSpeed: 400});
	$(".scrollable").scrollable();
	$(".items img").click(function() {
		if ($(this).hasClass("active")) { return; }
		var url = $(this).attr("src").replace("_t", "");
		var wrap = $("#image_wrap").fadeTo("medium", 0.5);
		var img = new Image();
		img.onload = function() {
			wrap.fadeTo("fast", 1);
			wrap.find("img").attr("src", url);
		};
		img.src = url;
		$(".items img").removeClass("active");
		$(this).addClass("active");
	}).filter(":first").click();
});
</script>
<div>
	<div class="clear"></div>
	<table>
	<tr><td style="vertical-align:top;">
	<div id="side_nav">
		<div id="side_nav_top">&nbsp;</div>
		<div id="side_nav_header">
			<?php
			if($this->uri->segment(3) == 1){
				echo $this->lang->line('prod_str');
			}else if($this->uri->segment(3) == 2){
				echo $this->lang->line('door_str');
			}
			?>
		</div>
		<div id="side_nav_body">
			<?php
				$c=0;
				$i=0;
				$set=0;
				foreach($prod as $p){
					$curr='';
					if($this->uri->segment(4)){
						if($p['type'] == $this->uri->segment(4)){
							$c=$i;
							$curr=" class=\"current\"";
						}
					}else{
						if($set == 0){
							$curr=" class=\"current\"";
							$set=1;
						}
					}
					echo "<div".$curr.">".anchor($site_lang."/product/".$this->uri->segment(3)."/".$p['type'],$p['title'])."</div>";
					$i++;
				}
			?>
		</div>
		<div id="side_nav_footer">&nbsp;</div>
	</div>
	</td><td style="vertical-align:top;">
	<div style="margin-top:10px;width:620px;">
		<div class="tabs">
			<ul class="tabs">
				<li><a href="#tab1"><?=$this->lang->line('des')?></a></li>
				<li><a href="#tab2"><?=$this->lang->line('app')?></a></li>
				<li><a href="#tab3"><?=$this->lang->line('tech')?></a></li>
			</ul>
			<div class="panes">
				<div id="tab1"><?=$prod[$c]['content']?></div>
				<div id="tab2">
					<div id="image_wrap">
						<img src="http://static.flowplayer.org/tools/img/blank.gif" width="500" height="375" />
					</div>
					<a class="prev browse left disabled"></a>
					<div class="scrollable">
						<div class="items">
							<?php
								$i=1;
								foreach($pix as $p):
									if($i%5 == 1){
										echo "<div>";
									}
									echo '<img src="'.site_url('public/files/'.$p['name']).'">';
									if($i%5 == 0){
										echo "</div>";
									}
									$i++;
								endforeach;
								if(count($pix)%5 != 0){
									echo "</div>";
								}
								$dis_str="";
								if(count($pix) < 5){
									$dis_str=" disabled";
								}
							?>
						</div>
					</div>
					<a class="next browse right<?php echo $dis_str?>"></a>
					<div class="clear" style="margin-bottom:10px;"></div>
				</div>
				<div id="tab3"><?=$prod[$c]['content2']?></div>
			</div>
		</div>
	</div>
	</td></tr>
	</table>
</div>