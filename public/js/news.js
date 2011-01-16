var news_rec = new Ext.data.Record.create([
	{name:'id'},
	{name:'title'},
	{name:'content'},
	{name:'created'},
	{name:'modified'},
	{name:'lang'},
	{name:'cname'},
	{name:'category'}
]);

var news_ds = new Ext.data.JsonStore({
	proxy:new Ext.data.HttpProxy({
		method:'post',
		url:'news_list'
	}),
	root:'root',
	fields:news_rec
});
news_ds.on('load',function(){
	tp.body.unmask();
});

var news_cm = new Ext.grid.ColumnModel([
	new Ext.grid.RowNumberer(),
	{header:'id',dataIndex:'id',hidden:true},
	{header:'類別',dataIndex:'cname'},
	{header:'標題',dataIndex:'title',id:'title'},
	{header:'建立時間',dataIndex:'created'},
	{header:'更新時間',dataIndex:'modified'},
	{header:'語系',dataIndex:'lang'}
]);
var edit_record;
var news_grid = new Ext.grid.GridPanel({
	store:news_ds,
	cm:news_cm,
	loadMask:true,
	autoHeight:true,
	autoExpandClumn:'title',
	viewConfig:{forceFit:true},
	stripeRows:true,
	bbar:new Ext.PagingToolbar({
		pageSize:20,
		store:news_ds,
		displayInfo:true
	}),
	tbar:new Ext.Toolbar([{
			text:'新增',
			handler:function(){
				news_form.getForm().reset();
				news_combo.setDisabled(true);
				news_form.buttons[0].setText('新增');
				news_form_win.show();
				CKEDITOR.instances.content.setData('');
			}
		},{
			text:'編輯',
			handler:function(){
				var sm = news_grid.getSelectionModel();
				edit_record = sm.getSelected();
				news_taxo_ds.baseParams.lang = edit_record.data.lang;
				news_taxo_ds.load();
				news_taxo_ds.on('load',setEditData);
			}
		},{
			text:'刪除',
			handler:function(){
				Ext.Msg.confirm('訊息','確定要刪除？',function(btn){
					if(btn == 'yes'){
						var sm = news_grid.getSelectionModel();
						var record = sm.getSelected();
						news_ds.remove(record);
					}
				});
			}
		}
	])
});
function setEditData(){
	news_form.buttons[0].setText('修改');
	news_form.getForm().loadRecord(edit_record);
	news_form_win.show();
	news_taxo_ds.un('load',setEditData);
}
news_grid.on('celldblclick',function(g,r){
	
});

var news_taxo_ds = new Ext.data.JsonStore({
	proxy:new Ext.data.HttpProxy({
		method:'post',
		url:'get_news_taxo'
	}),
	root:'root',
	fields:[
		{name:'id'},
		{name:'name'}
	]
});

var news_combo = new Ext.form.ComboBox({
	fieldLabel:'類別',
	id:'news_combo',
	store:news_taxo_ds,
	mode:'local',
	hiddenName:'category',
	triggerAction:'all',
	editable:false,
	displayField:'name',
	valueField:'id',
	disabled:true
});
var news_lang_combo = new Ext.form.ComboBox({
	fieldLabel:'語系',
	id:'news_lang_combo',
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
news_lang_combo.on('select',function(){
	news_taxo_ds.baseParams.lang = news_lang_combo.getValue();
	news_taxo_ds.load();
});
news_taxo_ds.on('load',function(){
	news_combo.setDisabled(false);
});
var news_form = new Ext.form.FormPanel({
	labelAlign:'right',
	labelWidth:100,
	title:'最新消息',
	defaultType:'textfield',
	defaults:{
		anchor:'90%'
	},
	items:[news_lang_combo,news_combo,{
		xtype:'hidden',
		name:'id'
	},{
		fieldLabel:'標題',
		name:'title'
	},{
		xtype:'ckeditor',
		fieldLabel:'內容',
		CKConfig:{
			customConfig:'http://192.168.1.131/~Dars/efg/public/js/ckeditor/config.js'
		},
		name:'content',
		id:'content'
	}],
	buttons:[{
		text:'新增',
		handler:function(){
			news_form.getForm().submit({
				url:'news_save',
				success:function(){
					show_Growl(1,'訊息','儲存成功');
					news_form.getForm().reset();
					news_combo.reset();
					news_combo.setDisabled(true);
					news_form_win.hide();
					news_ds.load();
				},
				failure:function(){
					news_form.getForm().reset();
					news_combo.reset();
					news_combo.setDisabled(true);
					show_Growl(2,'警告','儲存異常');
					news_form_win.hide();
					news_ds.load();
				}
			});
		}
	},{
		text:'取消',
		handler:function(){
			news_form_win.hide();
		}
	}]
});
var news_form_win = new Ext.Window({
	renderTo:Ext.getBody(),
	layout:'fit',
	width:750,
	height:500,
	autoScroll:true,
	modal:true,
	closable:true,
	closeAction:'hide',
	items:[news_form]
});
news_form_win.hide();