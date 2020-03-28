<?php
if (isset($_POST["enter"]))
{
	$conn=new mysqli("localhost","root","","electro");
	$name=$_POST["item_name"];
	$it_name=$_POST["it_name"];
	$industry=$_POST["industry"];
	

	$sql = "INSERT INTO item (item_name,item_type_id,item_made_in) 
	VALUES ('$name', '$it_name','$industry')";

    if ($conn->query($sql) === TRUE) {
       header ("location:item_data_show.php");
    } else {
        echo "Failed insert:".mysqli_connect_error($conn);
    }
}

?>