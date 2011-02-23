/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	config.toolbarCanCollapse = false;
	config.resize_enabled = false;
	config.language = 'zh';
	config.uiColor = '#CECECE';
	config.colorButton_backStyle = 'transparent';
	config.toolbar = [
		['Maximize'],
		['Bold','Italic','Underline','Strike'],
		['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
		['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
		['Link','Unlink','Anchor'],
		['Image','Table','HorizontalRule'],
		'/',
		['Styles','Format','Font','FontSize'],
		['TextColor','BGColor'],
		['Cut','Copy','Paste','PasteText','PasteFromWord']
	];
	config.filebrowserUploadUrl = base_url+'admin/ckupdate';
};
