<?php
if (isset($_POST["enter"]))
{
	$conn=new mysqli("localhost","root","","electro");
	$cat_name=$_POST["it_name"];
    $cat_unit=$_POST["unit"];
    $cat_qty=$_POST["qty"];
	$cat_price=$_POST["price"];

    
    
	$sql = "INSERT INTO item_category(item_type_id,item_unit,item_quantity,item_price) 
	VALUES ('$cat_name','$cat_unit','$cat_qty','$cat_price')";

    if ($conn->query($sql) === TRUE) {
       header ("location:cat_data_show.php");
    } else {
        echo "Failed insert:".mysqli_connect_error($conn);

}
}
?>