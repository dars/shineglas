var titles_store = new Ext.data.Store({
	proxy: new Ext.data.HttpProxy({
		method:'post',
		url:base_url+'admin/get_nodes_title'
	}),
	reader: new Ext.data.JsonReader({root:'root'},[
			{name:'name'},
			{name:'id'}
		])
});
//titles_store.load({params:{category:'summary'}});

var title_combo = new Ext.form.ComboBox({
	fieldLabel:'類別',
	id:'type_combo',
	store:titles_store,
	mode: 'local',
	hiddenName:'type',
	emptyText:'請選擇',
	triggerAction:'all',
	editable:false,
	displayField:'name',
	valueField:'id'
});
title_combo.on('select',function(){
	wel_form.getForm().el.mask('資料處理中','x-mask-loading');
	ds.baseParams.id = '';
	ds.baseParams.type = title_combo.getValue();
	ds.baseParams.lang = lang_combo.getValue();
	ds.reload();
});

var lang_combo = new Ext.form.ComboBox({
	fieldLabel:'語系',
	id:'lang_combo',
	mode:'local',
	emptyText:'請選擇語系',
	hiddenName:'lang',
	triggerAction:'all',
	editable:false,
	store:new Ext.data.SimpleStore({
		fields:['value','text'],
		data:[['zhtw','繁體中文'],['en','English']]
	}),
	displayField:'text',
	valueField:'value'
});
lang_combo.on('select',function(){
	wel_form.getForm().el.mask('資料處理中','x-mask-loading');
	ds.baseParams.ps='summary';
	ds.baseParams.type = title_combo.getValue();
	ds.baseParams.lang = lang_combo.getValue();
	ds.load({params:{id:''}});
});
var node_title = new Ext.form.TextField({
	fieldLabel:'標題',
	name:'title',
	xtype:'textfield'
});
var wel_form = new Ext.form.FormPanel({
	title:'文字簡介 - 首頁歡迎',
	autoScroll:true,
	labelAlign:'right',
	labelWidth:100,
	frame:true,
	defaults:{
		anchor:'85%',
		magTarget:'side'},
	items:[{
		layout:'column',
		items:[{
			layout:'form',
			items:[title_combo]
		},{
			layout:'form',
			items:[lang_combo]
		}]
	},{
		name:'id',
		xtype:'hidden'
	},node_title,{
		fieldLabel:'內容',
		layout:'fit',
		xtype:'ckeditor',
		name:'content',
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
			wel_form.getForm().el.mask('資料儲存中','x-mask-loading');
			wel_form.getForm().submit({
				url:base_url+'admin/save_node_content',
				success:function(){
					show_Growl(1,'訊息','資料已儲存');
					ds.reload();
				},
				failure:function(f,a){
					for(o in a.re){
						console.log(o+' = '+a.o);
					}
					wel_form.getForm().el.unmask();
					show_Growl(2,'警告','資料儲存異常');
				}
			});
		}
	}]
});
var ini=0;
wel_form.on('activate',function(){
	if(ini == 0){
		show_info_tab('summary','首頁歡迎',27);
		ini=1;
	}
});