var prod_store = new Ext.data.JsonStore({
	proxy:new Ext.data.HttpProxy({
		method:'post',
		url:'get_node_content'
	}),
	root:'root',
	fields:[
		{name:'id'},
		{name:'title'},
		{name:'content'},
		{name:'content2'},
		{name:'lang'},
		{name:'prod_type',mapping:'type'},
		{name:'created'},
		{name:'modified'}
	]
});
prod_store.on('load',function(){
	var prod_record = prod_store.getAt(0);
	prod_form.getForm().reset();
	prod_form.getForm().loadRecord(prod_record);
	prod_form.getForm().el.unmask();
});

var prod_titles_store = new Ext.data.JsonStore({
	proxy: new Ext.data.HttpProxy({
		method:'post',
		url:'get_nodes_title'
	}),
	root:'root',
	fields:[
		{name:'name'},
		{name:'id'}
	]
});

var prod_title_combo = new Ext.form.ComboBox({
	fieldLabel:'類別',
	id:'prod_type_combo',
	store:prod_titles_store,
	mode: 'local',
	hiddenName:'prod_type',
	emptyText:'請選擇',
	triggerAction:'all',
	displayField:'name',
	valueField:'id'
});
prod_title_combo.on('select',function(){
	prod_form.getForm().el.mask('資料處理中','x-mask-loading');
	read_prod_data();
});
var prod_pix_form = new Ext.form.FormPanel({
	title:'圖片上傳',
	style:{marginBottom:'5px'},
	labelAlign:'right',
	labelWidth:100,
	frame:true,
	fileUpload:true,
	buttonAlign:'center',
	defaults:{
		anchor:'95%'
	},
	items:[{
		xtype:'hidden',
		name:'pptype',
		id:'pptype'
	},{
		fieldLabel:'圖片一',
		name:'ppix1',
		xtype:'fileuploadfield',
		buttonText:'瀏 覽'
	},{
		fieldLabel:'圖片二',
		name:'ppix2',
		xtype:'fileuploadfield',
		buttonText:'瀏 覽'
	},{
		fieldLabel:'圖片三',
		name:'ppix3',
		xtype:'fileuploadfield',
		buttonText:'瀏 覽'
	},{
		fieldLabel:'圖片四',
		name:'ppix4',
		xtype:'fileuploadfield',
		buttonText:'瀏 覽'
	},{
		fieldLabel:'圖片五',
		name:'ppix5',
		xtype:'fileuploadfield',
		buttonText:'瀏 覽'
	}],
	buttons:[{
		text:'檔案上傳',
		handler:function(){
			prod_pix_form.get('pptype').setValue(prod_title_combo.getValue());
			prod_pix_form.getForm().submit({
				url:'upload_prod_pix',
				waitMsg:'圖檔上傳中',
				success:function(){
					show_Growl(1,'訊息','上傳成功');
					prod_pix_form.getForm().reset();
					prod_pix_store.reload();
				},
				failure:function(){
					show_Growl(2,'警告','上傳異常');
				}
			});
		}
	},{
		text:'重設',
		handler:function(){
			prod_pix_form.getForm().reset();
		}
	}]
});
var prod_pix_store = new Ext.data.JsonStore({
	proxy: new Ext.data.HttpProxy({
		method:'post',
		url:'get_prod_pix'
	}),
	root:'root',
	fields:['id','name','hash_id']
});

var prod_tpl = new Ext.XTemplate(
	'<tpl for=".">',
		'<div class="thumb-wrap" id="{name}">',
		'<div class="thumb"><img src="../public/files/{name}" title="{name}"></div>',
		'<span class="x-editable">{name}</span></div>',
	'</tpl>',
	'<div class="x-clear"></div>');

var prod_tbar = new Ext.Toolbar({
	style:{border:'1px solid #99BBE8'},
});
prod_tbar.add('->',{
	text:'刪除',
	icon:'img/delete.png'
});
var prod_pix_panel = new Ext.Panel({
	id:'images-view',
	frame:true,
	autoHeight:true,
	layout:'fit',
	title:'圖片瀏覽',
	tbar:prod_tbar,
	autoScroll:true,
	items:new Ext.DataView({
		store:prod_pix_store,
		tpl:prod_tpl,
		autoHeight:true,
		multiSelect:true,
		overClass:'x-view-over',
		itemSelector:'div.thumb-wrap',
		emptyText: 'No images to display',
		plugins: [
			new Ext.DataView.DragSelector(),
			new Ext.DataView.LabelEditor({dataIndex: 'name'})
		],
		prepareData:function(data){
			return data;
		}
	})
});


var prod_form = new Ext.form.FormPanel({
	title:'玻璃產品',
	autoScroll:true,
	labelAlign:'right',
	labelWidth:100,
	frame:true,
	defaults:{
		anchor:'85%',
		magTarget:'side'},
	items:[prod_title_combo,{
		name:'id',
		xtype:'hidden'
	},{
		fieldLabel:'產品說明',
		layout:'fit',
		xtype:'ckeditor',
		name:'content',
		CKConfig:{
			customConfig:'http://192.168.1.131/~Dars/shineglas/public/js/ckeditor/config.js',
			width:'82%'
		}
	},{
		fieldLabel:'技術資訊',
		layout:'fit',
		xtype:'ckeditor',
		name:'content2',
		CKConfig:{
			customConfig:'http://192.168.1.131/~Dars/shineglas/public/js/ckeditor/config.js',
			width:'82%'
		}
	},{
		fieldLabel:'最後更新時間',
		name:'modified',
		xtype:'textfield',
		readOnly:true
	}],
	buttons:[{
		text:'儲存',
		handler:function(){
			prod_form.getForm().el.mask('資料儲存中','x-mask-loading');
			prod_form.getForm().submit({
				url:'save_node_content',
				success:function(){
					show_Growl(1,'訊息','資料已儲存');
					ds.reload();
				},
				failure:function(f,a){
					for(o in a.re){
						console.log(o+' = '+a.o);
					}
					prod_form.getForm().el.unmask();
					show_Growl(2,'警告','資料儲存異常');
				}
			});
		}
	}]
});
var prod_panel = new Ext.Panel({
	autoHeight:true,
	id:'prodadmin',
	frame:true,
	layout:'column',
	autoScroll:true,
	items:[{
		columnWidth:1,
		items:[prod_form]
	},{
		columnWidth:0.3,
		items:[prod_pix_form]
	},{
		columnWidth:0.7,
		items:[prod_pix_panel]
	}]
});
var read_prod_data = function(){
	var v = prod_title_combo.getValue();
	prod_pix_store.load({params:{hash_id:v}});
	prod_store.load({params:{type:v}});
};