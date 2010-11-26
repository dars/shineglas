$(function(){
	var main_links=$("#main_nav img[class!='spacer']");
	var i=0;
	$('#main_nav img').hover(function(){
		this.src= eval(this.id+'_a').src;
	},function(){
		this.src = eval(this.id).src;
	});
		
});