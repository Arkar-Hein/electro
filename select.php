<?php
$conn=new mysqli("localhost","root","","electro");

 $sql="Select * from delivery_data";
 $result=$conn->query($sql);
  
echo "$result->num_rows";
$conn->close();

?>