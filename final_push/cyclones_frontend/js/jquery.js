$(window).load(function(){
		var new_height = $(window).height() - 70;
		$( ".site_main_sliderwrapper" ).css( "height", new_height );
});
$(document).ready(function () {
    $(document).on("click", ".main_form_gender_btn", function () {
        $(this).toggleClass("gender_btn--toggled");
    });
});