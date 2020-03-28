	<?php

    $conn=new mysqli("localhost","root","","electro");
	
        
        $id=$_POST["id"];
        $address=$_POST["address"];
        $station=$_POST["station"];
        $date=$_POST["date"];



	
			$sql = "insert into delivery_data(delivery_address,station,delivery_date,customer_id) VALUES ('$address','$station','$date','$id')";
    
		  if ($conn->query($sql) === TRUE) {
echo"Success Delivery";
    } else {
        echo "Failed insert:".mysqli_connect_error($conn);
    }


	
   
	?>