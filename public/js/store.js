var rec = new Ext.data.Record.create([
	{name:'id'},
	{name:'title'},
	{name:'content'},
	{name:'lang'},
	{name:'type'},
	{name:'created'},
	{name:'modified'}
]);
var ds = new Ext.data.Store({
	proxy:new Ext.data.HttpProxy({
		method:'post',
		url:'get_node_content'
	}),
	reader: new Ext.data.JsonReader({
		root:'root'
		},rec)
});
ds.on('load',function(){
	var record = ds.getAt(0);
	wel_form.getForm().reset();
	wel_form.getForm().loadRecord(record);
	wel_form.getForm().el.unmask();
});