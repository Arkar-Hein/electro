
<html>
 <head>
	<title>Insert Item Type</title>
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
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

	
	.center-me {
		color: #FFF;
		/*font-size: 50px;*/
		margin-top: 7%;
	}
    
  #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
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
    <div class="container">
        <div class="banner_rounded" style="color:black; font-size:30px; margin-top:3%; margin-left:30%;">Customer Details</div>
			<div class="center-me">
              
                <?php
                $conn=new mysqli("localhost","root","","electro");
                        $sql=$conn->query("select * from customer_registration");
                
				echo "<table id='customers'>
					  <tr>
					  <th>Customer Name</th>
					  <th>Address</th>
					  <th>Phone Number</th>
				
					 
					  </tr>";
				while($row=$sql->fetch_assoc())
				{		
					  $c1=$row['customer_name'];
					  $c2=$row['address'];
					  $c3=$row['phone_number'];
					 
					
					 echo "<tr>
					  <td>$c1</td>
					  <td>$c2</td>
					  <td>$c3</td>
					 		 
							</tr>"; 
					}
					
				echo  "</table>";
                ?>
               
               
                 </div>
		
	</div>



</body>   
</html>