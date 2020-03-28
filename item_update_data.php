<?php
$conn=new mysqli("localhost","root","","electro");
$t_id=$_POST['item_type_id'];
$t_name=$_POST['item_type_name'];

	$update_result=mysqli_query($conn," UPDATE item_type SET  item_type_name='$t_name'  WHERE item_type_id='$t_id'");
	if($update_result)
	{
	header('Location:insert_type_show.php');
	}
else
	{
	echo "No Data";
	}
?>