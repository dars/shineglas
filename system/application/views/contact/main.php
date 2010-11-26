<?php
$site_lang = $this->uri->segment(1);
$this->lang->load('site',$site_lang);
?>
<div class="clear"></div>
<div id="contact_form">
	<h2><?=$this->lang->line('contact_str')?></h2>
	<?=form_open($site_lang.'contact/send_mail')?>
	<form method="post" name="contact_form" id="contact_form" action="<?=site_url("contact/send_mail")?>">
	<table>
		<tr>
			<th><?=$this->lang->line('form_name')?>：</th>
			<td><?=form_input(array('name'=>'name','id'=>'name'))?></td>
		</tr>
		<tr>
			<th><?=$this->lang->line('form_tel1')?>：</th>
			<td><?=form_input(array('name'=>'tel1','id'=>'tel1'))?></td>
		</tr>
		<tr>
			<th><?=$this->lang->line('form_tel2')?>：</th>
			<td><?=form_input(array('name'=>'tel2','id'=>'tel2'))?></td>
		</tr>
		<tr>
			<th><?=$this->lang->line('form_email')?>：</th>
			<td><?=form_input(array('name'=>'email','id'=>'email'))?></td>
		</tr>
		<tr>
			<th><?=$this->lang->line('form_content')?>：</th>
			<td>
				<?=form_textarea(array('name'=>'content','id'=>'content'))?>
			</td>
		</tr>
		<tr>
			<td style="text-align:center;padding-top:20px;" colspan=2>
				<?=form_button(array('name'=>'sub_btn','id'=>'sub_btn','type'=>'submit'),$this->lang->line('form_sub'))?>
			</td>
		</tr>
	</table>
	<?=form_close()?>
</div>