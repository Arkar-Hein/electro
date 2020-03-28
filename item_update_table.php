<?php
if (isset($_POST["enter"]))
{
	$conn=new mysqli("localhost","root","","electro");
    
    $item_id=$_POST['item_id'];	
$item_name=$_POST['item_name'];
$item_type_name=$_POST['it_name'];
$item_industry=$_POST['industry'];

    
$sql_update="UPDATE item SET 
item_name='$item_name' ,
item_type_id='$item_type_name',  
item_made_in='$item_industry' 
WHERE item_id='$item_id'";



    if ($conn->query($sql_update) === TRUE) {
       header ("location:item_data_show.php");
    } else {
        echo "Failed Update:".mysqli_connect_error($conn);
    }
}

?>