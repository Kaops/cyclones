$.ajax({
  url: "functions/graphs.php",
  dataType: "json"
}).done(function(data){
    var order_array = [];
    var age_array = [];
    var order_loc_array =[];
    var payment_array = [];
    var sold_prod_array = [];
    $.each(data, function(index, value){
      if(typeof(value.created_at) != 'undefined'){
        order_array.push(value.created_at);
      }
      if(typeof(value.birthday) != 'undefined'){
        age_array.push(value.birthday);
      }
      if(typeof(value.city) != 'undefined' || typeof(value.plz) != 'undefined'){
        order_loc_array.push(value.city +","+ value.plz);
      }
      if(typeof(value.pref_payment) != 'undefined'){
        payment_array.push(value.pref_payment);
      }
      if(typeof(value.name) != 'undefined'){
        sold_prod_array.push(value.name);
      }
    });
    order_data(order_array);
    age_data(age_array);
    order_loc(order_loc_array);
    pref_payment(payment_array);
    sold_products(sold_prod_array);
});


function sold_products(data){
   var products = [], count = [], occ;
  $.each(data, function(index, value){
    occ = $.inArray(value, products);
    if( occ == -1){
      products.push(value);
      count.push(1);
    }else {
      count[occ]++;
    }
  })

  var linectx = document.getElementById("sold_products");
  var linechart = new Chart(linectx, {
    type: 'bar',
    data: {
    labels: products,
    datasets: [
        {
            label: "Sold Products",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: count,
            spanGaps: false,
        }
    ]
}
});
}


function pref_payment(data){
  var payment = [], count = [0], occ;
  $.each(data, function(index, value){
    occ = $.inArray(value, payment);
    if( occ == -1){
      payment.push(value);
      count.push(1);
    }else {
      count[occ]++;
    }
  });
  var barctx = document.getElementById("payment");
  var myBarChart = new Chart(barctx, {
    type: 'bar',
    data: {
    labels: payment,
    datasets: [
        {
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            data: count,
        }
    ]
}
  });
}






function order_loc(data){
  var location = [], count = [],newarr = [], tmp, occ;
  $.each(data, function(index, value){
    tmp = value.split(",");
    newarr.push(tmp[0]);
  })
  $.each(newarr, function(index, value){
    occ = $.inArray(value, location);
    if( occ == -1 ){
      location.push(value);
      count.push(1);
    }else {
      count[occ]++;
    }
  });

  var barctx = document.getElementById("order_location");
  var barchart = new Chart(barctx, {
    type: 'pie',
    data: {
    labels: location,
    datasets: [
        {
            label: "Orders by location",
            backgroundColor: ["#FF6384","#36A2EB","#FFCE56"],
              hoverBackgroundColor: ["#FF6384","#36A2EB","#FFCE56"],
            data: count,
          }
      ]
    }
});

}


function age_data(data){
  var age = [0, 0, 0, 0, 0, 0];
  var currentyear = new Date().getFullYear();
  $.each(data, function(index, value) {
    var tmp = value.split("-");
    var tmpage = currentyear - parseInt(tmp);
    switch(true){
      case tmpage <= 20:
        age[0]++;
        break;
      case tmpage <= 40 && tmpage > 20:
        age[1]++;
        break;
      case tmpage <= 60 && tmpage > 40:
        age[2]++;
        break;
      case tmpage <= 80 && tmpage > 60:
        age[3]++;
        break;
      case tmpage <= 100 && tmpage > 80:
        age[4]++;
        break;
      default:
        age[5]++;
        break;
    }
  });
  var piectx = document.getElementById("user_age");
  var piechart = new Chart(piectx, {
    type: 'pie',
    data: {
      labels: ["0-20","21-40","41-60","61-80","81-100","101-x"],
      datasets: [
          {
              data: age,
              backgroundColor: ["#FF6384","#36A2EB","#FFCE56"],
              hoverBackgroundColor: ["#FF6384","#36A2EB","#FFCE56"]
          }]
      }
  });

}













function order_data(data){
   var array = data;
    var labels = new Array();
    var dataarr = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    $.each(array, function(index, value){
      var tmp = value.split("-");
      switch(tmp[1]){
        case "01":
          dataarr[0] += 1;
          break;
        case "02":
          dataarr[1] += 1;
          break;
        case "03":
          dataarr[2] += 1;
          break;
        case "04":
          dataarr[3] += 1;
          break;
        case "05":
          dataarr[4] += 1;
          break;
        case "06":
          dataarr[5] += 1;
          break;
        case "07":
          dataarr[6] += 1;
          break;
      }
      dataarr.push(tmp[1]);
      labels.push(value);
    });
  var linectx = document.getElementById("order_dates");
  var linechart = new Chart(linectx, {
    type: 'line',
    data: {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
       "datasets": [{
          "data": dataarr,
              "pointStrokeColor": "#fff",
              "fillColor": "rgba(220,220,220,0.5)",
              "pointColor": "rgba(220,220,220,1)",
              "strokeColor": "rgba(220,220,220,1)"
      }]
    }
  });
}


















$(function(){
    var url = window.location.href; 
    $(".dashboard_nav_list a").each(function() {
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
