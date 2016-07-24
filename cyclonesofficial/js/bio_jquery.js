// window.onclick = function(e) {
//     console.log(e); // then e.srcElement.className has the class
// };
// onload
$( document ).ready(function(){
  $("#desc_1").hide();
  $("#desc_2").hide();
  $("#desc_3").hide();
  $("#desc_4").hide();
  $("#desc_5").hide();
  $(".site_main_bio_div_1").hide().removeClass('invis').fadeIn(300).fadeOut(300).delay(1100).fadeIn(200).delay(100).fadeOut(100).queue(function(){$(this).addClass('invis').show()})
  $(".site_main_bio_div_2").hide().removeClass('invis').fadeIn(300).fadeOut(300).delay(500).fadeIn(200).delay(100).fadeOut(100).queue(function(){$(this).addClass('invis').show()})
  $(".site_main_bio_div_3").hide().removeClass('invis').fadeIn(300).fadeOut(300).delay(200).fadeIn(200).delay(100).fadeOut(100).queue(function(){$(this).addClass('invis').show()})
  $(".site_main_bio_div_4").hide().removeClass('invis').fadeIn(300).fadeOut(300).delay(800).fadeIn(200).delay(100).fadeOut(100).queue(function(){$(this).addClass('invis').show()})
  $(".site_main_bio_div_5").hide().removeClass('invis').fadeIn(300).fadeOut(300).delay(1400).fadeIn(200).delay(100).fadeOut(100).queue(function(){$(this).addClass('invis').show()})
});

$(function(){
  //event listeners
  $(".site_main_bio_hover_1").click(bio_swap);
  $(".site_main_bio_hover_2").click(bio_swap);
  $(".site_main_bio_hover_3").click(bio_swap);
  $(".site_main_bio_hover_4").click(bio_swap);
  $(".site_main_bio_hover_5").click(bio_swap);

  $("#bio_x_1").click(bio_x);
  $("#bio_x_2").click(bio_x);
  $("#bio_x_3").click(bio_x);
  $("#bio_x_4").click(bio_x);
  $("#bio_x_5").click(bio_x);

  //function to swap in the correct description for the clicked bandmember
  function bio_swap(event)
  {
    event.preventDefault();
    if ($(event.target).attr('class') == "site_main_bio_hover_1") {
      var $desc_to_show = $('#desc_1');
    }
    else if ($(event.target).attr('class') == "site_main_bio_hover_2") {
      var $desc_to_show = $('#desc_2');
    }
    else if ($(event.target).attr('class') == "site_main_bio_hover_3") {
      var $desc_to_show = $('#desc_3');
    }
    else if ($(event.target).attr('class') == "site_main_bio_hover_4") {
      var $desc_to_show = $('#desc_4');
    }
    else if ($(event.target).attr('class') == "site_main_bio_hover_5") {
      var $desc_to_show = $('#desc_5');
    }

    var $desc_temp = $(".desc_active");
    //"slide", { direction: "left" }, 1000
    //$desc_to_show.show("slide", { direction: "left" }, "slow" ).addClass('desc_active');
    //$desc_temp.hide("slide", { direction: "left" }, "slow" ).removeClass('desc_active');
    $desc_temp.stop().hide("slow").removeClass('desc_active');
    $desc_to_show.stop().show("slow").addClass('desc_active');;
  }

  //function for the x that is displayed on band members bio_swap
  function bio_x(event){
    event.preventDefault();
    var $desc_to_remove = $(event.target).parents(".site_main_bio_wrapper");
    // $("#desc_band").show("slide", { direction: "left" }, "slow" ).addClass('desc_active');
    // $desc_to_remove.hide("slide", { direction: "left" }, "slow" ).removeClass('desc_active');
    $("#desc_band").show("slow").addClass('desc_active');
    $desc_to_remove.hide("slow").removeClass('desc_active');

  }
});
