<html>
<head>
    <style>
    #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
    padding: 15px;
  text-align: left;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000;
  color: white;
}
    </style>
    </head>
<body>
    <div id="back"><a href="insert_data.php">Go Back</a></div>
<?php

$conn=mysql_connect("localhost","root","")or die("error");
	mysql_select_db('electro',$conn);

				$sql=mysql_query("Select c.address,i.item_name,o.order_date,t.takeaway_date from customer_registration c,item i,order_item o,takeaway t
where c.customer_id=o.customer_id 
and i.item_id=o.item_id
and c.customer_id=t.customer_id
order by t.takeaway_id DESC ");
				echo "<table id='customers'>
					  <tr>
							  
					  <th>Address</th>
					  <th>Item Name</th>
					  <th>Order Date</th>
					  <th>Takeaway Date</th>
					  </tr>";
while($row=mysql_fetch_array($sql))
				{
		
					 				  
					  $c1=$row['address'];
					  $c2=$row['item_name'];
					  $c3=$row['order_date'];
					  $c4=$row['takeaway_date'];

					 echo "<tr>
					  <td>$c1</td>
					  <td>$c2</td>
					  <td>$c3</td>
					  <td>$c4</td>
					 


							</tr>"; 
					}
					
				echo  "</table>";

					
?></body>
    </html>