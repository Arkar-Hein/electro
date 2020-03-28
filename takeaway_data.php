	<?php

    $conn=new mysqli("localhost","root","","electro");
	
        
        $id=$_POST["id"];
        $date=$_POST["date"];
        $time_picker=$_POST["time_picker"];        


	
			$sql = "insert into takeaway(takeaway_date,takeaway_time,customer_id) VALUES ('$date','$time_picker','$id')";
    
		  if ($conn->query($sql) === TRUE) {
echo"Success Delivery";
    } else {
        echo "Failed insert:".mysqli_connect_error($conn);
    }


	
   
	?>