$(function(){

$(window).load(function(){
        var new_height = $(window).height() - 70;
        $( ".site_main_sliderwrapper" ).css( "height", new_height );
});

$(window).load(function(){
		var new_height = $(window).height() - 70;
		$( ".site_main_sliderwrapper" ).css( "height", new_height );
});
$(document).ready(function () {
    $(document).on("click", ".main_form_gender_btn", function () {
        $(this).toggleClass("gender_btn--toggled");
    });
});

//$( document ).ready(function(){
var $slides = new Array();
$slides[1] = $(".slide-1");
$slides[2] = $(".slide-2");
$slides[3] = $(".slide-3");
$slides[4] = $(".slide-4");
var $sliderLbtn = $(".site_main_sliderleftbtn");
var $sliderRbtn = $(".site_main_sliderrightbtn");
var current = 1;
var start = false;
$slides[2].hide();
$slides[3].hide();
$slides[4].hide();
//});
// var autoslider = setInterval(interval, 5000); Funktioniert noch nicht
$sliderLbtn.on("click", function(){
    //clearInterval(autoslider);
    if(current > 1){
        $slides[current].stop().hide("slow");
        current--;
        $slides[current].stop().show("slow");
    } else {
        $slides[current].stop().hide("slow");
        current = 4;
        $slides[current].stop().show("slow");
    }
    //setInterval(interval, 5000);
});
$sliderRbtn.on("click", function(){
    //clearInterval(autoslider);
    if(current < 4){
        $slides[current].stop().hide("slow");
        current++;
        $slides[current].stop().show("slow");
    } else {
        $slides[current].stop().hide("slow");
        current = 1;
        $slides[current].stop().show("slow");
    }
    //setInterval(interval, 5000);
});
function interval(){
    if(current < 4){
        if(start === true){
            $slides[current].stop().show("slow");
            start = false;
        }else {
            $slides[current].stop().hide("slow");
            current++;
            $slides[current].stop().show("slow");
        }
    } else {
        current = 1;
        start = true;
    }
}

//$( document ).ready(function(){
        $(".payment_info_wrapper").hide();
        $(".payment_general_info").show();
        $(".main_payment_paypal").on("click", function(){
            if ( $(this).hasClass("payment_btn_highlight") ){
                $(".payment_paypal_info").hide("slow");
                $(".payment_general_info").show("slow");
                remove_classes();
            }else {
                remove_classes();
                $(this).addClass("payment_btn_highlight");
                $(".payment_info_wrapper").hide("slow");
                $(".payment_paypal_info").show("slow");
                $("#use_paypal").val( 1 );
            }


        });
        $(".main_payment_sofort").on("click", function(){
            if ( $(this).hasClass("payment_btn_highlight") ){
                $(".payment_sofort_info").hide("slow");
                $(".payment_general_info").show("slow");
                remove_classes();
            }else{
                remove_classes();
                $(this).addClass("payment_btn_highlight");
                $(".payment_info_wrapper").hide("slow");
                $(".payment_sofort_info").show("slow");
                $("#use_sofort").val( 1 );
            }
        });
        $(".main_payment_credit").on("click", function(){
            if ( $(this).hasClass("payment_btn_highlight") ){
                $(".payment_credit_info").hide("slow");
                $(".payment_general_info").show("slow");
                remove_classes();
            }else {
                remove_classes();
                $(this).addClass("payment_btn_highlight");
                $(".payment_info_wrapper").hide("slow");
                $(".payment_credit_info").show("slow");
                $("#use_cc").val( 1 );
            }
        });
//});

function remove_classes(){
    $(".main_payment_paypal").removeClass("payment_btn_highlight");
    $(".main_payment_sofort").removeClass("payment_btn_highlight");
    $(".main_payment_credit").removeClass("payment_btn_highlight");
    $("#use_paypal").val( 0 );
    $("#use_sofort").val( 0 );
    $("#use_cc").val( 0 );

}

// window.onclick = function(e) {
//     console.log(e); // then e.srcElement.className has the class
// };
// onload
//$( document ).ready(function(){
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
//});

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

//header dropdown
$(document).ready(function () {
$('.header_login').click(function () {
    if ($('#signin-dropdown').is(":visible")) {
        $('#signin-dropdown').slideUp()
    $('header_login').removeClass('active');
    } else {
        $('#signin-dropdown').slideDown()
    $('header_login').addClass('active');
    }
    return false;
});
$('#signin-dropdown').click(function(e) {
e.stopPropagation();
});
$(document).click(function() {
    $('#signin-dropdown').slideUp();
$('header_login').removeClass('active');
});
});

$(document).ready(function () {
  $("#albums").click(shopfilter);
  $("#vinyl").click(shopfilter);
  $("#merch").click(shopfilter);
  $("#tickets").click(shopfilter);
  $("#sale").click(shopfilter);

  // $(".filtered").click(ripfilter);
  // $("body").on("click", ".filtered", ripfilter);

  function shopfilter(event){

    event.preventDefault();

    if ($(event.target).hasClass("filtered")) {
      $(".shop_item").fadeIn();
      $(event.target).removeClass("filtered");
    } else {

      $(".filtered").removeClass("filtered");
      if ($(event.target).attr('id') == "albums") {
        var $items_to_show = $('.albums');
      } else if ($(event.target).attr('id') == "vinyl") {
        var $items_to_show = $('.vinyl');
      } else if ($(event.target).attr('id') == "merch") {
        var $items_to_show = $('.merch');
      } else if ($(event.target).attr('id') == "tickets") {
        var $items_to_show = $('.tickets');
      }else if ($(event.target).attr('id') == "sale") {
        var $items_to_show = $('.sale');
      }
      $items_to_show.fadeIn();
      $(".shop_item").not($items_to_show).fadeOut();
      $(event.target).addClass("filtered");
      };
    };


  // function ripfilter(event){
  //   event.preventDefault();
  //   $(event.target).removeClass("filtered");
  //   $(".shop_item").show();
  // };
});

//header dropdown
$(function(){

  $("body").on("click", "[data-action='cart.products.add']", add_product);
  $("body").on("change", "[data-action='cart.products.update_quantity']", update_quantity);
  $("body").on("click", "[data-action='cart.empty']", delete_cart);
  $("body").on("click", "[data-action='cart.products.delete']", delete_product);

  function add_product(event) {
    event.preventDefault();

    $.ajax({
      // index.php?action=add_product&product_id=1
      url: $(this).attr('href'),
      method: 'get',
    }).done(function(data){
      var new_cart = $(".main_cart_wrapper", data).last();
      $(".main_cart_wrapper").html(new_cart);


    });
}
  function update_quantity(event) {
    event.preventDefault();
    $.ajax({
      url: 'index.php?site=cart',
      method: 'get',
      data: {
        action: 'update_quantity',
        product_id: $(this).data('product-id'),
        new_quantity: $(this).val(),
      }
    }).done(function(data){
      var new_cart = $(".main_cart_wrapper", data).last();
      $(".main_cart_wrapper").html(new_cart);


    });
  }
  function delete_cart(event) {
  event.preventDefault();

  $.ajax({
    // index.php?action=add_product&product_id=1
    url: $(this).attr('href'),
    method: 'get',
  }).done(function(data){
    var new_cart = $(".main_cart_wrapper", data).last();
    $(".main_cart_wrapper").html(new_cart);


  });
}
function delete_product(event) {
  event.preventDefault();

  $.ajax({
    // index.php?action=add_product&product_id=1
    url: $(this).attr('href'),
    method: 'get',
  }).done(function(data){
    var new_cart = $(".main_cart_wrapper", data).last();
    $(".main_cart_wrapper").html(new_cart);


  });
}

  $("body").on("click", "[data-action='cart.products.up_quantity']", up_quantity);
  $("body").on("click", "[data-action='cart.products.down_quantity']", down_quantity);

  function up_quantity(event) {
    event.preventDefault();
    // console.log($(this).prev());

    var quant = $(this).prev().val();
    quant++;
    $(this).prev().val( quant );
    // console.log(quant);
    $.ajax({
      url: 'index.php?site=cart',
      method: 'get',
      data: {
        action: 'update_quantity',
        product_id: $(this).prev().data('product-id'),
        new_quantity: $(this).prev().val(),
      }
    }).done(function(data){
      var new_cart = $(".main_cart_wrapper", data).last();
      $(".main_cart_wrapper").html(new_cart);


    });

  }

  function down_quantity(event) {
    event.preventDefault();
    //console.log($(this).next());

    var quant = $(this).next().val();
    quant--;
    $(this).next().val( quant );
    //console.log(quant);
    $.ajax({
      url: 'index.php?site=cart',
      method: 'get',
      data: {
        action: 'update_quantity',
        product_id: $(this).next().data('product-id'),
        new_quantity: $(this).next().val(),
      }
    }).done(function(data){
      var new_cart = $(".main_cart_wrapper", data).last();
      $(".main_cart_wrapper").html(new_cart);


    });

  }
});

$(function(){
  $("#alternate_shipping").addClass("alternate_hidden");
  $("#ship_to_alternate").click(function(){
    $("#alternate_shipping").toggleClass("alternate_hidden");
    if ($("#use_alternate").val() == 0) {
      $("#use_alternate").val( 1 )
    } else {
      $("#use_alternate").val( 0 )
    }
  });

  $("body").on("change", "#shipping_input", update_shipping);
  function update_shipping(event) {
    $("#review_total").trigger("change");
    var total_before = parseFloat($("#total_before").text())
    if ($("#shipping_input").val() == "express") {
      $("#total_shipping").text("Express: 20€");
      // var new_total = total_before + 20.00;
      // $("#total_after").text(new_total);
    } else if ($("#shipping_input").val() == "standard" && total_before < 90.00) {
      $("#total_shipping").text("Standard: 10€");
      // var new_total = total_before + 10.00;
      // $("#total_after").text(new_total);
    } else if ($("#shipping_input").val() == "standard" && total_before >= 90.00) {
      $("#total_shipping").text("Standard: FREE");
      // var new_total = total_before;
      // $("#total_after").text(new_total);
    } else {
      $("#total_shipping").text("Please select above!");
      // var new_total = total_before;
      // $("#total_after").text(new_total);
    }
  }
  $("body").on("change", "#review_total", update_finaltotal);
  function update_finaltotal(event) {
    var total_before = parseFloat($("#total_before").text())
    if ($("#shipping_input").val() == "express") {
      var new_total = total_before + 20.00;
      new_total = new_total.toFixed(2);
      $("#total_after").text(new_total);
      $("#total_after_submission").val(new_total);
    } else if ($("#shipping_input").val() == "standard" && total_before < 90.00) {
      var new_total = total_before + 10.00;
      new_total = new_total.toFixed(2);
      $("#total_after").text(new_total);
      $("#total_after_submission").val(new_total);
    } else if ($("#shipping_input").val() == "standard" && total_before >= 90.00) {
      var new_total = total_before;
      new_total.toFixed(2);
      $("#total_after").text(new_total);
      $("#total_after_submission").val(new_total);
    } else {
      var new_total = total_before;
      new_total = new_total.toFixed(2);
      $("#total_after").text(new_total);
      $("#total_after_submission").val(new_total);
    }
  }
});

$(function(){


  $("body").on("change", "[data-action='checkout.products.update_quantity']", update_quantity);

  $("body").on("click", "[data-action='checkout.products.delete']", delete_product);

  function update_quantity(event) {
    event.preventDefault();
    $.ajax({
      url: 'index.php?site=checkout',
      method: 'get',
      data: {
        action: 'update_quantity',
        product_id: $(this).data('product-id'),
        new_quantity: $(this).val(),
      }
    }).done(function(data){
      var new_cart = $(".review_table", data).last();
      $(".review_table").html(new_cart);
      var new_before = $("#total_before", data).last();
      $("#total_before").html(new_before);
      $("#shipping_input").trigger("change");
    });
  }
function delete_product(event) {
  event.preventDefault();

  $.ajax({
    // index.php?action=add_product&product_id=1
    url: $(this).attr('href'),
    method: 'get',
  }).done(function(data){
    var new_cart = $(".review_table", data).last();
    $(".review_table").html(new_cart);
    var new_before = $("#total_before", data).last();
    $("#total_before").html(new_before);
    $("#shipping_input").trigger("change");
  });
}

  $("body").on("click", "[data-action='checkout.products.up_quantity']", up_quantity);
  $("body").on("click", "[data-action='checkout.products.down_quantity']", down_quantity);

  function up_quantity(event) {
    event.preventDefault();
    // console.log($(this).prev());

    var quant = $(this).prev().val();
    quant++;
    $(this).prev().val( quant );
    // console.log(quant);
    $.ajax({
      url: 'index.php?site=checkout',
      method: 'get',
      data: {
        action: 'update_quantity',
        product_id: $(this).prev().data('product-id'),
        new_quantity: $(this).prev().val(),
      }
    }).done(function(data){
      var new_cart = $(".review_table", data).last();
      $(".review_table").html(new_cart);
      var new_before = $("#total_before", data).last();
      $("#total_before").html(new_before);
      $("#shipping_input").trigger("change");
    });

  }

  function down_quantity(event) {
    event.preventDefault();
    //console.log($(this).next());

    var quant = $(this).next().val();
    quant--;
    $(this).next().val( quant );
    //console.log(quant);
    $.ajax({
      url: 'index.php?site=checkout',
      method: 'get',
      data: {
        action: 'update_quantity',
        product_id: $(this).next().data('product-id'),
        new_quantity: $(this).next().val(),
      }
    }).done(function(data){
      var new_cart = $(".review_table", data).last();
      $(".review_table").html(new_cart);
      var new_before = $("#total_before", data).last();
      $("#total_before").html(new_before);
      $("#shipping_input").trigger("change");
    });

  }
});








});
