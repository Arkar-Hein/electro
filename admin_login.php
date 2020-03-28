
	<?php
	
		$conn=new mysqli("localhost","root","","electro");
			$user_name = $_POST["username"];
			$psw = $_POST["password"];

			$sql = "select * from admin where admin_email='$user_name'  and admin_password='$psw'";
		  if ($sql)
          {
header ("location:data_show.php");
    } 
else 
{
        echo "Failed insert:".mysqli_connect_error($conn);
    }

	?>
