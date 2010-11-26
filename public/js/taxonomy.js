function node_delete(node){
	Ext.Msg.confirm('確認','確定刪除? #'+node.text,function(btn){
		if(btn == 'yes'){
			tp.body.mask('資料處理中...','x-mask-loading');
			Ext.Ajax.request({
				method:'POST',
				url:'delete_taxo',
				success:function(){
					show_Growl(1,'訊息','分類刪除完成');
				},
				failure:function(){
					show_Growl(2,'警告','分類刪除異常');
				},
				params:{id:node.id}
			});
			taxo_tree.getRootNode().reload();
		}
	});
}
function node_edit(node){
	treeEditor.editNode = node;
	treeEditor.startEdit(node.ui.textNode);
}
function node_add(){
	var node_form = new Ext.form.FormPanel({
		labelAlign:'right',
		labelWidth:'100',
		defaultType:'textfield',
		frame:true,
		width:350,
		defaults:{
			anchor:'95%',
			allowBlank:false
		},
		items:[{
			xtype:'hidden',
			name:'category',
			value:taxo_root.id.split('_')[0]
		},{
			xtype:'hidden',
			name:'lang',
			value:taxo_root.id.split('_')[1]
		},{
			fieldLabel:'分類名稱',
			name:'name'
		}],
		buttons:[{
			text:'儲存',
			handler:function(){
				if(node_form.getForm().isValid()){
					node_form.getForm().submit({
						url:'add_taxo',
						waitMsg:'資料儲存中...',
						success:function(){
							show_Growl(1,'訊息','資料儲存完成');
							taxo_tree.getRootNode().reload();
						},
						failure:function(){
							show_Growl(2,'警告','資料儲存異常');
							taxo_tree.getRootNode().reload();
						}
					});
					node_win.hide();
				}
			}
		},{
			text:'取消',
			handler:function(){node_win.hide();}
		}]
	});
	var node_win = new Ext.Window({
		title:'新增分類',
		renderTo:Ext.getBody(),
		layout:'fit',
		width:400,
		height:100,
		closable:false,
		modal:true,
		items:[node_form]
	});
	node_win.show();
}
var rcm = new Ext.menu.Menu({
	items:[{
		id:'add_tax',
		text:'新增類別',
		iconCls:'icon-drag',
		handler:function(){node_add();}
	},{
		id:'edit_tax',
		text:'編輯類別',
		iconCls:'icon-drag',
		handler:function(){node_edit(tmp_node);}
	},{
		id:'del_tax',
		text:'刪除類別',
		iconCls:'icon-drag',
		handler:function(){node_delete(tmp_node);}
	}]
});
function showRightClickMenu(node,e){
	tmp_node=node;
	this.showAt(e.getPoint());
}
var taxo_root = new Ext.tree.AsyncTreeNode({
	id:'product',
	text:'分類列表',
	draggable:false,
	leaf:false
});
var taxo_tree_loader = new Ext.tree.TreeLoader({
	dataUrl:'get_taxonomy_list',
	requestMethod:'post'
});
var taxo_tree = new Ext.tree.TreePanel({
	title:'分類設定',
	rootVisible:false,
	useArrows:true,
	autoScroll:true,
	animate:true,
	enableDD:true,
	containerScroll:true,
	loader:taxo_tree_loader
});
taxo_tree.setRootNode(taxo_root);
taxo_tree.on('nodedrop',function(e){
	var tmp_tree = taxo_tree.root.childNodes[0].childNodes;
	var count = tmp_tree.length;
	var i = 0;
	sort=[];
	while(i<count){
		sort.push(tmp_tree[i].id);
		i++;
	}
	Ext.Ajax.request({
		method:'POST',
		url:'sort_taxo',
		success:function(){
			show_Growl(1,'訊息','分類修改完成');
		},
		failure:function(){
			show_Growl(2,'警告','分類修改異常');
			tp.body.mask('資料處理中...','x-mask-loading');
			taxo_tree.getRootNode().reload();
		},
		params:{sort:Ext.encode(sort)}
	});
});
taxo_tree.on('contextmenu',showRightClickMenu,rcm);
taxo_tree.on('load',function(){tp.body.unmask();});

var treeEditor = new Ext.tree.TreeEditor(taxo_tree,{
	allowBlank:false
});
treeEditor.on('beforestartedit',function(treeEditor){
	return treeEditor.editNode.isLeaf();
});
treeEditor.on('complete',function(treeEditor){
	setTimeout(function(){
		Ext.Ajax.request({
			method:'POST',
			url:'edit_taxo',
			success:function(){
				show_Growl(1,'訊息','分類修改完成');
			},
			failure:function(){
				show_Growl(2,'警告','分類修改異常');
				tp.body.mask('資料處理中...','x-mask-loading');
				taxo_tree.getRootNode().reload();
			},
			params:{id:treeEditor.editNode.id,text:treeEditor.editNode.text}
		});
	},500);
});