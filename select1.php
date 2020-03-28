<?php
$conn=new mysqli("localhost","root","","electro");

 $sql="Select * from takeaway";
 $result=$conn->query($sql);
  
echo "$result->num_rows";
$conn->close();

?>