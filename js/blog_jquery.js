var $share_wrap = $(".blog_socialmedia_share");
var $share_imgs = $(".blog_socialmedia_img");
var $share_btn = $(".share-btn");
var socialmedia_active = false;
var twitter_plugin = $("#twitter-widget-0");

$share_imgs.hide("slow");
$share_btn.on("click", function(){
	event.preventDefault();
	switch($(this).hasClass("socialmedia_active") ) {
	    case true:
	    	$(this).siblings().children().hide("slow");
			$(this).removeClass("socialmedia_active");
			break;
	    case false:
	        $(this).siblings().children().show("slow");
			$(this).addClass("socialmedia_active");
			break;
	    default:
	        break;
	}

});
var max_entries = $(".blog_entry_loadbtn").attr("data-entries");
var max_height = max_entries * 400;
$(".blog_entry_loadbtn").on("click", function(event){
	event.preventDefault();
	var current_height = $(".blog_maincontent_wrapper").css("height");
	current_height = current_height.slice(0, -2);
	var current_height_int = parseInt(current_height);
	var new_height = current_height_int + 1200;
	if(new_height > max_height){new_height = max_height; this.text = "No more entries";}
	$(".blog_maincontent_wrapper").css("height", new_height + "px");
	$(".blog_maincontent_wrapper").css("max-height", new_height + "px");

});