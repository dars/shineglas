var tree = new Ext.tree.TreePanel({
	region:'west',
	id:'left_menu',
	title:'管理選項',
	autoScroll:true,
	width:180,
	slide:true,
	rootVisible:false,
	loadMask:true,
	loader:tree_loader
});
var tree_loader = new Ext.tree.TreeLoader();
var root = new Ext.tree.AsyncTreeNode({
	id:'menu',
	text:'分類清單',
	children:[{
		id:"info",
		text:'文字簡介',
		expanded:true,
		children:[{	 
			id:'aboutus',
			text:'關於我們',
			leaf:true
		},{			 
			id:'case',
			text:'專題報導',
			leaf:true
		}]			 
	},{
		text:'最新消息',
		children:[{
			id:"news",
			text:'資料列表',
			leaf:true
		},{
			id:'news_taxo_zhtw',
			text:'中文分類設定',
			leaf:true
		},{
			id:'news_taxo_en',
			text:'英文分類設定',
			leaf:true
		}]
	},{
		text:'系統介紹',
		children:[{
			id:"sys",
			text:'內文編輯',
			leaf:true
		},{
			id:'sys_taxo_zhtw',
			text:'中文分類設定',
			leaf:true
		},{
			id:'sys_taxo_en',
			text:'英文分類設定',
			leaf:true
		}]
	},{
		text:'產品介紹',
		children:[{
			id:"product",
			text:'內文編輯',
			leaf:true
		},{
			id:'product_taxo_zhtw',
			text:'中文分類設定',
			leaf:true
		},{
			id:'product_taxo_en',
			text:'英文分類設定',
			leaf:true
		}]
	},{
		text:'工程實績',
		children:[{
			id:'project',
			text:'內文編輯',
			leaf:true
		},{
			id:'project_taxo_zhtw',
			text:'中文分類設定',
			leaf:true
		},{
			id:'project_taxo_en',
			text:'英文分類設定',
			leaf:true
		}]
	}]
});
tree.setRootNode(root);

tree.on('click',function(node){
	var id = node.id;
	switch(id){
		case 'aboutus':
			show_info_tab(27,'關於我們');
			break;
		case 'case':
			show_info_tab(28,'專題報導');
			break;
		case 'news_taxo_zhtw':
			show_taxo_tab('news','最新消息','zhtw');
			break;
		case 'sys_taxo_zhtw':
			show_taxo_tab('sys','系統介紹','zhtw');
			break;
		case 'product_taxo_zhtw':
			show_taxo_tab('product','產品介紹','zhtw');
			break;
		case 'project_taxo_zhtw':
			show_taxo_tab('project','工程實績','zhtw');
			break;
		case 'news_taxo_en':
			show_taxo_tab('news','最新消息','en');
			break;
		case 'sys_taxo_en':
			show_taxo_tab('sys','系統介紹','en');
			break;
		case 'product_taxo_en':
			show_taxo_tab('product','產品介紹','en');
			break;
		case 'project_taxo_en':
			show_taxo_tab('project','工程實績','en');
			break;
		case 'sys':
			show_info2_tab('sys','系統介紹');
			break;
		case 'product':
			show_info2_tab('product','系統介紹');
			break;
		case 'project':
			show_project_tab('工程實績');
			break;
		case 'news':
			show_news_tab('最新消息');
			break;
		default:
			break;
	}
});