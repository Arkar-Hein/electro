<?php
$item_id=$_GET['delete_item_id'];
			$conn=new mysqli("localhost","root","","electro");
			
	$sql=mysqli_query($conn,"Delete FROM item_type where item_type_id='$item_id'");
        if($sql)
			{
	header('Location:insert_type_show.php');
			}
?>