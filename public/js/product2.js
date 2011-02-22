var prod2_store = new Ext.data.JsonStore({
	proxy:new Ext.data.HttpProxy({
		method:'post',
		url:base_url+'admin/get_node_content'
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
prod2_store.on('load',function(){
	var prod2_record = prod2_store.getAt(0);
	prod2_form.getForm().reset();
	prod2_form.getForm().loadRecord(prod2_record);
	prod2_form.getForm().el.unmask();
});

var prod2_titles_store = new Ext.data.JsonStore({
	proxy: new Ext.data.HttpProxy({
		method:'post',
		url:base_url+'admin/get_nodes_title'
	}),
	root:'root',
	fields:[
		{name:'name'},
		{name:'id'}
	]
});

var prod2_title_combo = new Ext.form.ComboBox({
	fieldLabel:'類別',
	id:'prod2_type_combo',
	store:prod2_titles_store,
	mode: 'local',
	hiddenName:'prod_type',
	emptyText:'請選擇',
	triggerAction:'all',
	displayField:'name',
	valueField:'id',
	editable:false
});
prod2_title_combo.on('select',function(){
	prod2_form.getForm().el.mask('資料處理中','x-mask-loading');
	read_prod2_data();
});
var prod2_pix_form = new Ext.form.FormPanel({
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
			prod2_pix_form.get('pptype').setValue(prod2_title_combo.getValue());
			prod2_pix_form.getForm().submit({
				url:base_url+'admin/upload_prod_pix',
				waitMsg:'圖檔上傳中',
				success:function(){
					show_Growl(1,'訊息','上傳成功');
					prod2_pix_form.getForm().reset();
					prod2_pix_store.reload();
				},
				failure:function(){
					show_Growl(2,'警告','上傳異常');
				}
			});
		}
	},{
		text:'重設',
		handler:function(){
			prod2_pix_form.getForm().reset();
		}
	}]
});
var prod2_pix_store = new Ext.data.JsonStore({
	proxy: new Ext.data.HttpProxy({
		method:'post',
		url:base_url+'admin/get_prod_pix'
	}),
	root:'root',
	fields:['id','name','hash_id']
});

var prod2_tpl = new Ext.XTemplate(
	'<tpl for=".">',
		'<div class="thumb-wrap" id="{id}">',
		'<div class="thumb"><img src="'+base_url+'public/files/{name}" title="{name}"></div>',
		'<span class="x-editable">{name}</span></div>',
	'</tpl>',
	'<div class="x-clear"></div>');
var pix_dv2 = new Ext.DataView({
	store:prod2_pix_store,
	tpl:prod2_tpl,
	autoHeight:true,
	multiSelect:true,
	overClass:'x-view-over',
	itemSelector:'div.thumb-wrap',
	emptyText: '無圖片',
	plugins: [
		new Ext.DataView.DragSelector()
	],
	prepareData:function(data){
		data.shortname = Ext.util.Format.ellipsis(data.name, 15);
		return data;
	}
});
var prod2_tbar = new Ext.Toolbar({
	style:{border:'1px solid #99BBE8'},
});
prod2_tbar.add('->',{
	text:'刪除',
	icon:'img/delete.png',
	handler:function(){
		var r = pix_dv2.getSelectedRecords();
		if(r.length != 0){
			par='';
			for(i=0;i<r.length;i++){
			    if(i>0){
			    	par+='&';
			    }
			    par+='foo[]='+r[i].data.id;
			}
			Ext.Ajax.request({
				url:base_url+'admin/images_destory',
				params:par,
				success:function(){
				    show_Growl(1,'訊息','圖片已刪除');
				    prod2_pix_store.reload();
				    prod2_pix_form.getForm().reset();
				}
			});
		}
	}
});
var prod2_pix_panel = new Ext.Panel({
	id:'images-view',
	frame:true,
	autoHeight:true,
	layout:'fit',
	title:'圖片瀏覽',
	tbar:prod2_tbar,
	autoScroll:true,
	items:pix_dv2
});


var prod2_form = new Ext.form.FormPanel({
	title:'玻璃產品',
	autoScroll:true,
	labelAlign:'right',
	labelWidth:100,
	frame:true,
	defaults:{
		anchor:'85%',
		magTarget:'side'},
	items:[prod2_title_combo,{
		name:'id',
		xtype:'hidden'
	},{
		fieldLabel:'產品說明',
		layout:'fit',
		xtype:'ckeditor',
		name:'content',
		CKConfig:{
			customConfig:base_url+'public/js/ckeditor/config.js',
			width:'82%'
		}
	},{
		fieldLabel:'技術資訊',
		layout:'fit',
		xtype:'ckeditor',
		name:'content2',
		CKConfig:{
			customConfig:base_url+'public/js/ckeditor/config.js',
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
			prod2_form.getForm().el.mask('資料儲存中','x-mask-loading');
			prod2_form.getForm().submit({
				url:base_url+'admin/save_node_content',
				success:function(){
					show_Growl(1,'訊息','資料已儲存');
					ds.reload();
				},
				failure:function(f,a){
					for(o in a.re){
						console.log(o+' = '+a.o);
					}
					prod2_form.getForm().el.unmask();
					show_Growl(2,'警告','資料儲存異常');
				}
			});
		}
	}]
});
var prod2_panel = new Ext.Panel({
	autoHeight:true,
	id:'prod2admin',
	frame:true,
	layout:'column',
	autoScroll:true,
	items:[{
		columnWidth:1,
		items:[prod2_form]
	},{
		columnWidth:0.3,
		items:[prod2_pix_form]
	},{
		columnWidth:0.7,
		items:[prod2_pix_panel]
	}]
});
var read_prod2_data = function(){
	var v = prod2_title_combo.getValue();
	prod2_pix_store.load({params:{hash_id:v}});
	prod2_store.load({params:{type:v}});
};