<?php
$lhost="localhost";
$user="root";
$pswd="";
$dbname="electro";
$conn=mysqli_connect($lhost,$user,$pswd,$dbname);
	if (!$conn)
	{
		echo "Failed to connect:".mysqli_connect_error();
	}
	else
	{
		echo "Success Connection";
	}

?>