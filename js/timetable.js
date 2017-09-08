$('.sidenav-item').click(function(){
	var tab_id = $(this).attr('data-tab');
	var bread = $(this).html();
	$(this).siblings().removeClass('sidenav-active');
	$('.content_panel').css("display", "none");
	
	$(this).addClass('sidenav-active');
	$('#'+tab_id).css("display", "block");
	$("#bread_crumbs").children().html("Timetable > " + bread);
	$("#yearhead").html(bread+" Timetable");
});