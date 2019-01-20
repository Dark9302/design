$(document).on('click','.daohang li a',function(){
	$('.daohang li a').removeClass('active');
	$(this).addClass('active');
});
$(document).on('click','.daohang_m li',function(){
	$('.daohang_m li').removeClass('active');
	$(this).addClass('active');
});