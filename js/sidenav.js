$('.sidenav-item').click(function(){
	var tab_id = $(this).attr('data-tab');
	var bread = $(this).html();
	$(this).siblings().removeClass('sidenav-active');
	$('.content_panel').css("display", "none");
	
	$(this).addClass('sidenav-active');
	$('#'+tab_id).css("display", "block");
	var breadcrumb = $("#bread_crumbs").children().html();
	var n = breadcrumb.indexOf("&gt;");
	var brdmain = breadcrumb.substring(0,n);
	$("#bread_crumbs").children().html(brdmain+" > "+bread);
});