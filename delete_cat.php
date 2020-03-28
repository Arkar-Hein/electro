<?php
$cat_id=$_GET['delete_cat_id'];
			$conn=new mysqli("localhost","root","","electro");
			
	$sql=mysqli_query($conn,"Delete FROM item_category where item_category_id='$cat_id'");
        if($sql)
			{
	header('Location:cat_data_show.php');
			}
?>