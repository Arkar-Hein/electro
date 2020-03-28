<?php
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

	if($sql_update)
	{
	header('Location:item_data_show.php');
	}
	else
		{
echo mysqli_error();
}

?>