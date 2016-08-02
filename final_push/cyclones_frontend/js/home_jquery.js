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

