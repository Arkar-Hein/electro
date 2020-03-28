
  <?php
			session_start();
				$id=$_SESSION["customer_id"];
				
				$address=$_SESSION['address'];
				 
        ?>
<html>
    <head>
           <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
             <link rel="stylesheet" type="text/css" href="datepicker.css" /> 
<script type="text/javascript" src="datepicker.js"></script> 
<script type="text/javascript" src="timepicker.js"></script> 
        <style type="text/css">
	body{
		background-color:black;
		width: 0 auto;
		height: 100%;
		background-size: cover;
		background-repeat: no-repeat;
	}
	.banner {
		height: 550px;
		max-width: 400px;
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
           
        <div class="container">
		<div class="banner rounded">
			<div class="center-me">		
        	<h3><center>Delivery</center></h3>
        <form action="takeaway_data.php" method="post">
            <div class="form-group">
            <input type="text" hidden value="<?php echo $id; ?>" name="id"/>    
            </div>
            <div class="form-group">
                 <label>Time</label>
           <select name="time_picker">
               <option value="1">8 AM</option>
               <option value="2">9 AM</option>
               <option value="3">10 AM</option>
               <option value="4">11 AM</option>
               <option value="5">12 PM</option>
               <option value="6">1 PM</option>
               <option value="7">2 PM</option>
               <option value="8">3 PM</option>
               <option value="8">4 PM</option>
               <option value="8">5 PM</option>               
                </select>
            </div>
            <div class="form-group">
            <lable>Date</lable>
            <input type="date" class="datepicker" name="date" />
            </div>
            
            <input type="submit" value="Submit">
        </form>
                	</div>
		</div>
	</div>
    </body>
</html>