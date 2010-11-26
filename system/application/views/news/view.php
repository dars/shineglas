<?php
$site_lang = $this->uri->segment(1);
$this->lang->load('site',$site_lang);
?>
<div class="clear"></div>
<div class="content_view">
	<table>
		<tr>
			<th><?=$this->lang->line('field_id')?></th>
			<td>{id}</td>
		</tr>
		<tr>
			<th><?=$this->lang->line('field_type')?></th>
			<td>{cname}</td>
		</tr>
		<tr>
			<th><?=$this->lang->line('field_title')?></th>
			<td>{title}</td>
		</tr>
		<tr>
			<th><?=$this->lang->line('field_content')?></th>
			<td>{content}</td>
		</tr>
		<tr>
			<th><?=$this->lang->line('field_created')?></th>
			<td>{created}</td>
		</tr>
		<tr>
			<th><?=$this->lang->line('field_modified')?></th>
			<td>{modified}</td>
		</tr>
	</table>
	<div class="link_dv">
		<?=anchor($site_lang.'/news',$this->lang->line('back'));?>
	</div>
</div>