<?php
$conn=new mysqli("localhost","root","","electro");

$id = $_GET['update_i_id'];
$name= $_GET['update_i_name']; 
$it_name = $_GET['update_it_name']; 
$industry = $_GET['update_ind']; 
 
?>
<?php
$conn=new mysqli("localhost","root","","electro");
$sql="select * from item_type";
$result=mysqli_query($conn,$sql);
?>

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


	.banner {
		height: 540px;
		max-width: 40%;
		margin: 60px auto 40px auto;
		background-color: rgba(20,25,40,0.5);
		display: flex;
		/*border-radius: 20px;*/
	}

	.center-me {
		color: #FFF;
		/*font-size: 50px;*/
		margin: auto;
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
		<div class="banner rounded">
			<div class="center-me">
                 
				
				<h3><center>Item type Insert</center></h3>
                		
				<form method="POST" action="item_update_table.php" >
                    <div class="form-group">
						
						<input type="text" class="form-control" 
                             value="<?php echo $id;?>" hidden name="item_id" required/>
					</div>
					<div class="form-group">
						<label for="address">Item Name</label>
						<input type="text" class="form-control" 
                             value="<?php echo $name;?>" name="item_name" required/>
					</div>
          <div class="form-group">
						<label for="address">Item Type Name</label>
              <label for="address">Item Name</label>
              <select name="it_name">
											<?php

											while ($rows = mysqli_fetch_array($result)):;
											?>
											<option value="<?php echo $rows[0];?>"><?php echo $rows[1];?></option>

											<?php  endwhile; ?>
              </select>
					</div>
                    	<div class="form-group">
						<label for="address">Item Industry</label>
						<input type="text" class="form-control" 
                             value="<?php echo $industry;?>" placeholder="Item Made In" name="industry" required/>
					</div>
					<button type="submit" name="enter" class="btn btn-primary name="submit" btn-success" style="width:300px;">Submit</button>
				</form>
			</div>
		</div>
	</div>



</body>   
</html>