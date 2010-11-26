<?php
$site_lang = $this->uri->segment(1);
$this->lang->load('site',$site_lang);
?>
<div class="clear"></div>
<div class="index_div">
	<h2>{title}</h2>
	<table>
		<tr>
			<th><?=$this->lang->line('field_id')?></th>
			<th><?=$this->lang->line('field_type')?></th>
			<th><?=$this->lang->line('field_title')?></th>
			<th><?=$this->lang->line('field_created')?></th>
			<th><?=$this->lang->line('field_modified')?></th>
		</tr>
		<?php 
			$i=1;
			foreach($res as $r):
				$ch=' class="chrow"';
				if($i%2==1){
					$ch='';
				}
		?>
		<tr id="<?=$r['id']?>"<?=$ch?>>
			<td class="id_field center"><?=$i?></td>
			<td><?=$r['cname']?></td>
			<td><?=anchor($site_lang.'/news/view/'.$r['id'],$r['title'])?></td>
			<td><?=substr($r['created'],0,16)?></td>
			<td><?=substr($r['modified'],0,16)?></td>
		</tr>
		<?php 
			$i++;
			endforeach;
		?>
	</table>
	<?php echo $this->pagination->create_links();?>
</div>