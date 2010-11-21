var main_nav_news = new Image();
main_nav_news.src="public/images/main_nav_news.gif";
var main_nav_news_a = new Image();
main_nav_news_a.src="public/images/main_nav_news_a.gif";
var main_nav_aboutus = new Image();
main_nav_aboutus.src="public/images/main_nav_aboutus.gif";
var main_nav_aboutus_a = new Image();
main_nav_aboutus_a.src="public/images/main_nav_aboutus_a.gif";
var main_nav_product = new Image();
main_nav_product.src="public/images/main_nav_product.gif";
var main_nav_product_a = new Image();
main_nav_product_a.src="public/images/main_nav_product_a.gif";
var main_nav_door = new Image();
main_nav_door.src="public/images/main_nav_door.gif";
var main_nav_door_a = new Image();
main_nav_door_a.src="public/images/main_nav_door_a.gif";
var main_nav_case = new Image();
main_nav_case.src="public/images/main_nav_case.gif";
var main_nav_case_a = new Image();
main_nav_case_a.src="public/images/main_nav_case_a.gif";
var main_nav_case2 = new Image();
main_nav_case2.src="public/images/main_nav_case2.gif";
var main_nav_case2_a = new Image();
main_nav_case2_a.src="public/images/main_nav_case2_a.gif";
var main_nav_contact = new Image();
main_nav_contact.src="public/images/main_nav_contact.gif";
var main_nav_contact_a = new Image();
main_nav_contact_a.src="public/images/main_nav_contact_a.gif";
var main_nav_home = new Image();
main_nav_home.src="public/images/main_nav_home.gif";
var main_nav_home_a = new Image();
main_nav_home_a.src="public/images/main_nav_home_a.gif";
$(function(){
	var main_links=$("#main_nav img[class!='spacer']");
	var i=0;
	$('#main_nav img').hover(function(){
		this.src= eval(this.id+'_a').src;
	},function(){
		this.src = eval(this.id).src;
	});
		
});