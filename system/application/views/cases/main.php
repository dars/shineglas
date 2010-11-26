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
				echo $this->lang->line('case_str');
			}else if($this->uri->segment(3) == 2){
				echo $this->lang->line('case2_str');
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
					echo "<div".$curr.">".anchor($site_lang."/cases/".$this->uri->segment(3)."/".$p['type'],$p['title'])."</div>";
					$i++;
				}
			?>
		</div>
		<div id="side_nav_footer">&nbsp;</div>
	</div>
	</td><td style="vertical-align:top;">
	<div style="margin-top:10px;width:620px;">
		<h2 class="cases_title">{title}</h2>
		<div class="cases_content">{content}</div>
	</div>
	</td></tr>
	</table>
</div>