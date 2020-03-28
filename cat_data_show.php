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
         #loginPopup {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }
      /* Fix the button on the left side of the page */
      .open-btn {
      display: flex;
      justify-content: left;
      }
      /* Style and fix the button on the page */
      .open-button {
      background-color: black;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      opacity: 0.8;
      position: fixed;
      }
      /* Hide the Popup form */
      .form-popup {
      border: 2px solid #666;
      z-index: 9;
      max-width: 300px;
      margin: 0 auto;
      }
      /* Styles for the form container */
      .form-container {
      max-width: 300px;
      padding: 20px;
      background-color: #fff;
      }
      /* Full-width for input fields */
      .form-container input[type=text], .form-container input[type=password] {
      width: 100%;
      padding: 10px;
      margin: 5px 0 22px 0;
      border: none;
      background: #eee;
      }
      /* When the inputs get focus, do something */
      .form-container input[type=text]:focus, .form-container input[type=password]:focus {
      background-color: #ddd;
      outline: none;
      }
      /* Style submit/login button */
      .form-container .btn {
      background-color: #4CAF50;
      color: #fff;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom:10px;
      opacity: 0.8;
      }
      /* Style cancel button */
      .form-container .cancel {
      background-color: #cc0000;
      }
      /* Hover effects for buttons */
      .form-container .btn:hover, .open-button:hover {
      opacity: 1;
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
        <div class="banner_rounded" style="color:black; font-size:30px; margin-top:3%; margin-left:30%;">Item Category Details</div>
         <div class="open-btn">
      <button class="open-button" onclick="openForm()">
      <strong>Add Item Category</strong>
      </button>
    </div>
        <div id="loginPopup">
      <div class="form-popup" id="popupForm">
        <form method="POST" action="category_data.php" class="form-container" >
          <h2>Add Item Category</h2>
          <label for="email">
          <strong>Item Type Name</strong>
          </label>
            <select name="it_name">
											<?php

											while ($rows = mysqli_fetch_array($result)):;
											?>
											<option value="<?php echo $rows[0];?>"><?php echo $rows[1];?></option>

											<?php  endwhile; ?>
											</select>
          <label for="psw">
          <strong>Item Unit</strong>
          </label>
          <input type="text" id="psw" placeholder="Item Unit" name="unit" required>
          <label for="psw">
          <strong>Item Quantity</strong>
          </label>
        <input type="text" id="psw" placeholder="Quantity" name="qty" required>
             <label for="psw">
          <strong>Item Price</strong>
          </label>
          <input type="text" id="psw" placeholder="Price For Each Item" name="price" required>
         
          <button type="submit" name="enter" class="btn">Add</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
    </div>
    <script>
      function openForm() {
        document.getElementById("loginPopup").style.display="block";
      }
      
      function closeForm() {
        document.getElementById("loginPopup").style.display= "none";
      }
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        var modal = document.getElementById('loginPopup');
        if (event.target == modal) {
          closeForm();
        }
      }
      
    </script>
			<div class="center-me">
              
                <?php
                $conn=new mysqli("localhost","root","","electro");
                        $sql=$conn->query("select ic.item_category_id,it.item_type_name,it.item_type_id,ic.item_unit,ic.item_quantity,ic.item_price from item_category ic,item_type it
                        where it.item_type_id=ic.item_type_id");
                
				echo "<table id='customers'>
					  <tr>
                      <th>Category ID</th>
                      <th>Item Type ID</th>                     
					  <th>Item Type Name</th>
					  <th>Unit</th>
					  <th>Quantity</th>
					  <th>Price For Each</th>
					  <th>Update</th>
					  <th>Delete</th>                      
					 
					  </tr>";
				while($row=$sql->fetch_assoc())
				{		
					  $c1=$row['item_category_id'];
					  $c2=$row['item_type_id'];               $c3=$row['item_type_name'];
					  $c4=$row['item_unit'];
					  $c5=$row['item_quantity'];			
					  $c6=$row['item_price'];		 
					
					 echo "<tr>
					  <td>$c1</td>
                    <td>$c2</td>
                    <td>$c3</td>
                    <td>$c4</td>
                    <td>$c5</td>
                    <td>$c6</td>";
					 echo"
					   <td>
					<a href=\"cat_update.php? update_cat_id=$c1
                    & update_item_id=$c2 & update_unit=$c4 & update_quantity=$c5 & update_price=$c6\">
						<img src ='images/95-512.png' alt='price' width='30px' height='30px'>
					</a>
					  </td>
					  <td>
					  <a href=\"delete_cat.php? delete_cat_id=$c1 \">
						<img src ='images/627249-delete3-512.png' alt='price' width='30px' height='30px'>
					  </a>
					  </td>
					 		 
							</tr>"; 
					}
					
				echo  "</table>";
                ?>
               
               
                 </div>
		
	</div>



</body>   
</html>