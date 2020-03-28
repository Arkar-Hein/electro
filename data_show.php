<?php
$conn=new mysqli("localhost","root","","electro");
$sql = "SELECT COUNT(customer_id) as count FROM delivery_data 

			GROUP BY YEAR(delivery_date) ORDER BY delivery_date";

	$delivery = mysqli_query($conn,$sql);

	$delivery = mysqli_fetch_all($delivery,MYSQLI_ASSOC);

	$delivery = json_encode(array_column($delivery, 'count'),JSON_NUMERIC_CHECK);


	$sql = "SELECT COUNT(customer_id) as count FROM takeaway 

			GROUP BY YEAR(takeaway_id) ORDER BY takeaway_id";

	$takeaway = mysqli_query($conn,$sql);

	$takeaway = mysqli_fetch_all($takeaway,MYSQLI_ASSOC);

	$takeaway = json_encode(array_column($takeaway, 'count'),JSON_NUMERIC_CHECK);
?>
<html>
    <head>
    <title>
     Data Show   
    </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>

	<script src="https://code.highcharts.com/highcharts.js"></script>

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
    background-color:#228B22;
    background-repeat: no-repeat;
    
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}
        .button {border-radius: 2%;}
      
        .noti_guide{
          
            color:chartreuse;
        }
    #container1 {
       border-style: solid;
        max-width: 50%;
        max-height: 30%;
        margin: 35px 20px;
        
        padding:15px;
    
    }
      #container2 {
       border-style: solid;
        max-width: 50%;
        max-height: 30%;
        margin: 25px 20px;
    
      padding:15px;
    }

   
      
</style>
    </head>
    <body>
  
       <div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
<a href="customer_detail.php">Customer Detials</a>
<a href="data_show.php">Order Detials</a>
<a href="insert_type_show.php">Item Type Detail</a> 
<a href="cat_data_show.php">Category Detail</a>
<a href="item_data_show.php">Item Detail</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

  
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
        
        <div id="title" style="color:black; font-size:30px; margin-top:3%; margin-left:30%;">Update Delivery and Takeaway News</div>
  <div id="container1">   
      
<div class="noti_guide">There are new update delivery notifications.View more data....</div>
        <div  class="noti">
                     <a href="noti_view.php"><button id="noti_number"  class="button"></button></a>
				</div>
        
        
        <script type="text/javascript">
    function loadDoc() {
        setInterval(function(){
             var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("noti_number").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "select.php", true);
  xhttp.send();
        },1000);
 
}
    loadDoc();
    </script>
      </div>
        
        <div id="container2">   
      
              <p class="noti_guide">There are new update take away notifications.View more data....</p>
        <div  class="noti">
                     <a href="ta_noti_view.php"><button id="noti_number2"  class="button"></button></a>
				</div>
        
        
        <script type="text/javascript">
    function loadDoc() {
        setInterval(function(){
             var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("noti_number2").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "select1.php", true);
  xhttp.send();
        },1000);
 
}
    loadDoc();
    </script>
      </div>
        
        <div id="chart_part" style="margin-top:8%;">
            
<script type="text/javascript">


$(function () { 


    var data_takeaway = <?php echo $takeaway; ?>;

    var data_delivery = <?php echo $delivery; ?>;


    $('#bar_chart').highcharts({

        chart: {

            type: 'column'

        },

        title: {

            text: 'Yearly Delivery And Takeaway Customer Rate'

        },

        xAxis: {

            categories: ['2020','2021','2022', '2023','2024']

        },

        yAxis: {

            title: {

                text: 'Rate'

            }

        },

        series: [{

            name: 'Take Away',

            data: data_takeaway

        }, {

            name: 'Delivery',

            data: data_delivery

        }]

    });

});


</script>
            <div class="container">

	<br/>

	<h2 class="text-center">Yearly Customer Rate</h2>

    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">

                <div class="panel-body">

                    <div id="bar_chart"></div>

                </div>

            </div>

        </div>

    </div>

</div>
        </div>
    </body>
</html>