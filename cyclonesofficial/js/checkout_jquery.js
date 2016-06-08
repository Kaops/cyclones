
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
            }
        });

function remove_classes(){
    $(".main_payment_paypal").removeClass("payment_btn_highlight");
    $(".main_payment_sofort").removeClass("payment_btn_highlight");
    $(".main_payment_credit").removeClass("payment_btn_highlight");

}
