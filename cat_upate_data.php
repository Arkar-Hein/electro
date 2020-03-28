<?php
$conn=new mysqli("localhost","root","","electro");

$cat_id=$_POST['cat_id'];
$t_id=$_POST['item_type_id'];
$unit=$_POST['unit'];
$qty=$_POST['qty'];
$price=$_POST['price'];
	$update_result=mysqli_query($conn," UPDATE item_category SET  item_type_id='$t_id',
    item_unit='$unit',
    item_quantity='$qty',
    item_price='$price'
    WHERE item_category_id='$cat_id'");
	if($update_result)
	{
	header('Location:cat_data_show.php');
	}
else
	{
	echo "No Data";
	}
?>