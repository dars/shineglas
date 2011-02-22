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
		}/*,{			 
			id:'report',
			text:'專題報導',
			leaf:true
		}*/]			 
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
		text:'玻璃產品',
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
		text:'氣密門窗/玻璃五金',
		children:[{
			id:"product2",
			text:'內文編輯',
			leaf:true
		},{
			id:'product2_taxo_zhtw',
			text:'中文分類設定',
			leaf:true
		},{
			id:'product2_taxo_en',
			text:'英文分類設定',
			leaf:true
		}]
	},{
		text:'專題報導',
		children:[{
			id:"case",
			text:'內文編輯',
			leaf:true
		},{
			id:'case_taxo_zhtw',
			text:'中文分類設定',
			leaf:true
		},{
			id:'case_taxo_en',
			text:'英文分類設定',
			leaf:true
		}]
	},{
		text:'使用案例',
		children:[{
			id:"case2",
			text:'內文編輯',
			leaf:true
		},{
			id:'case2_taxo_zhtw',
			text:'中文分類設定',
			leaf:true
		},{
			id:'case2_taxo_en',
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
			show_info_tab('summary','關於我們',27);
			break;
		case 'report':
			show_info_tab('summary','專題報導',28);
			break;
		case 'case':
			show_info2_tab('case','專題報導');
			break;
		case 'case2':
			show_info2_tab('case2','使用案例');
			break;
		case 'news_taxo_zhtw':
			show_taxo_tab('news','最新消息','zhtw');
			break;
		case 'product_taxo_zhtw':
			show_taxo_tab('product','玻璃產品','zhtw');
			break;
		case 'product2_taxo_zhtw':
			show_taxo_tab('product2','玻璃產品','zhtw');
			break;
		case 'case_taxo_zhtw':
			show_taxo_tab('case','專題報導','zhtw');
			break;
		case 'case2_taxo_zhtw':
			show_taxo_tab('case2','使用案例','zhtw');
			break;
		case 'news_taxo_en':
			show_taxo_tab('news','最新消息','en');
			break;
		case 'product_taxo_en':
			show_taxo_tab('product','玻璃產品','en');
			break;
		case 'product2_taxo_en':
			show_taxo_tab('product2','玻璃產品','en');
			break;
		case 'case_taxo_en':
			show_taxo_tab('case','專題報導','en');
			break;
		case 'case2_taxo_en':
			show_taxo_tab('case2','使用案例','en');
			break;
		case 'product':
			show_prod_tab('product','玻璃產品');
			break;
		case 'product2':
			show_prod2_tab('product2','氣密門窗/玻璃五金');
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