/* ------ code in jQuery ------- */ 

$(".accordion").click(function(){
	$(this).toggleClass("active");
	var panel = $(this).closest('.acc').children('.ac_panel')[0];
	
	if (panel.style.maxHeight){
      panel.style.maxHeight = null;
	  panel.style.borderBottom = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
	  panel.style.borderBottom = "1px solid #ccc";
    } 
});
