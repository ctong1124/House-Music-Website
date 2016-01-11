jQuery(document).ready(function($){
	var div = document.getElementById("dom-target-section");
    var section = div.textContent;

    


	$(".navbar .navbar-collapsed .nav-click").click(function(){
	   
		//if both open then close both
	   if(($(".navbar-basic").css("display") == "block")
	    && ($(".navbar-timeline").css("display") == "block")){
	   	$(".navbar-basic").toggle("fast");
	  	$(".navbar-timeline").toggle("fast");
	  	$(".navbar-basic .timeline").toggleClass("on-timeline");
	   }
	   //if basic open, but timeline isn't then just close basic
	   if(($(".navbar-basic").css("display") == "block")
	    && ($(".navbar-timeline").css("display") == "none")){
	   	$(".navbar-basic").toggle("fast");
	   }

	   //if in timeline and both are closed, automatically open timeline as well
	   if(section == "timeline" && ($(".navbar-basic").css("display") == "none")
	    && ($(".navbar-timeline").css("display") == "none")) {
	   	$(".navbar-basic").toggle("fast");
	   	$(".navbar-timeline").toggle("fast");
	   	$(".navbar-basic .timeline").toggleClass("on-timeline");
	   }

	   if(section == "main" && ($(".navbar-basic").css("display") == "none")
	    && ($(".navbar-timeline").css("display") == "none")) {
	   	$(".navbar-basic").toggle("fast");
	   }




	});



	$(".navbar .navbar-basic .timeline").click(function(){
	   $(".navbar-timeline").toggle("fast");
	   $(this).toggleClass("on-timeline");
	});

	
	
	//hover function for individual timeline dates
	$(".navbar .navbar-timeline a").hover(function() {
	    
	    $(this).css('color', '#025857');
	    $(this).children(".circle").css('border', '2px solid #025857');
	}, function() {
		if ($(this).hasClass('current')) {
			$(this).css('color', 'white');
		    $(this).children(".circle").css('border', '2px solid white');
		} else {
			$(this).css('color', '#616161');
		    $(this).children(".circle").css('border', '2px solid #616161');
		}
	}
    
);


});
