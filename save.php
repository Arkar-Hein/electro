<!DOCTYPE html>
<html>
<head>
	<title>saving data</title>
	
</head>
<body>
	<?php
	
		$conn=new mysqli("localhost","root","","electro");
	
			echo "REGISTERED USER DETAILS:</br>";
			
            $customer_id=$_POST['customer_id'];
			$customer_name = $_POST["customer_name"];
			$address = $_POST["address"];
			$phone_number= $_POST["phone_number"];




			$sql = "insert into customer_registration(customer_id,customer_name,address,phone_number) VALUES ('$customer_id','$customer_name','$address','$phone_number')";
    
		  if ($conn->query($sql) === TRUE) {
header ("location:invoice.php");
    } else {
        echo "Failed insert:".mysqli_connect_error($conn);
    }


	

	?>
	
</body>
</html>

</body>
</html>