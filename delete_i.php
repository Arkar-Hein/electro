<?php
$item_id=$_GET['delete_i_id'];
			$conn=new mysqli("localhost","root","","electro");
			
	$sql=mysqli_query($conn,"Delete FROM item where item_id='$item_id'");
        if($sql)
			{
	header('Location:item_data_show.php');
			}
?>