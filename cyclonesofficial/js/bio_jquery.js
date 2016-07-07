//onload
$( document ).ready(function(){
  $(".site_main_bio_div_1").hide().removeClass('invis').fadeIn(400).fadeOut(400).delay(300).fadeIn(250).delay(150).fadeOut(150).queue(function(){$(this).addClass('invis').show()})
  $(".site_main_bio_div_2").hide().removeClass('invis').fadeIn(400).fadeOut(400).delay(600).fadeIn(250).delay(150).fadeOut(150).queue(function(){$(this).addClass('invis').show()})
  $(".site_main_bio_div_3").hide().removeClass('invis').fadeIn(400).fadeOut(400).delay(900).fadeIn(250).delay(150).fadeOut(150).queue(function(){$(this).addClass('invis').show()})
  $(".site_main_bio_div_4").hide().removeClass('invis').fadeIn(400).fadeOut(400).delay(1200).fadeIn(250).delay(150).fadeOut(150).queue(function(){$(this).addClass('invis').show()})
  $(".site_main_bio_div_5").hide().removeClass('invis').fadeIn(400).fadeOut(400).delay(1500).fadeIn(250).delay(150).fadeOut(150).queue(function(){$(this).addClass('invis').show()})
});
