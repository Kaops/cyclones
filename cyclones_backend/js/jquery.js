$.ajax({
  url: "functions/graphs.php",
}).done(function(data){
  
  var array = data;
  console.log(array);
   $.each(array, function(index, value){

   });
     var pieData = [
     {
        value: 25,
        label: 'Java',
        color: '#811BD6'
     },
     {
        value: 10,
        label: 'Scala',
        color: '#9CBABA'
     },
     {
        value: 30,
        label: 'PHP',
        color: '#D18177'
     },
     {
        value : 35,
        label: 'HTML',
        color: '#6AE128'
     }
    ];
  

var context = document.getElementById('order_dates').getContext('2d');
var skillsChart = new Chart(context).Pie(pieData);
});
$(function(){
    // this will get the full URL at the address bar
    var url = window.location.href; 

    // passes on every "a" tag 
    $(".dashboard_nav_list a").each(function() {
            // checks if its the same on the address bar
        if(url == (this.href)) { 
            $(this).closest("li").addClass("dashboard_nav_active");
        }
    });
});
$(".delete_entry_btn").on("click", function(event){
	 var retVal = confirm("Really delete Entry?");
       if( retVal == true ){
       }
       else{
       		event.preventDefault();
       }
});
setInterval(function(){
  var date = new Date();
  var format = [
      ("0" + date.getHours()).substr(-2)
    , ("0" + date.getMinutes()).substr(-2)
    , ("0" + date.getSeconds()).substr(-2)
  ].join(":");
  document.getElementById("clock").innerHTML = format;
}, 500);


$(".popup_wrap").show("slow", function() {
    setTimeout(function(){ $(".popup_wrap").hide("slow"); }, 4000);
});
$(".popup_wrap").on("click", function(){
	$(".popup_wrap").hide("slow");
});
