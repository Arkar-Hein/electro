<?php
session_start();
	$conn=new mysqli("localhost","root","","electro");
?>
<?php
$sql_Retrieve=mysqli_query ($conn,"Select * from customer_registration");

while($re=mysqli_fetch_assoc($sql_Retrieve))
{
$id=$re['customer_id'];    
$name=$re['customer_name'];
$address=$re['address'];
$password=$re['phone_number'];
$_SESSION['customer_id']=$id; 
$_SESSION['address']=$address;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Electro</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body id="bdd">


	      
		
		<div id="header">
        
		
            <div id="logo">
              <img id="image" src="images/logo2.png" alt="logo" style="max-width:200px;height:180px;padding:5px;float:left;" />
            </div>
		
		
			<div id="text">
          <h2>Electro</h2>
              <h3>  SY(No.8,9),82 Street,Between 26*27,Mandalay.</h3></br>

				Phone:(02)-4031311,(02)-4069211,(09)-43146703,(09)-964031311</p>
				</div>
		</div>
		
		<div id="bdy">
		
		<div id="customer">

            <table>
            <tr><td>
                <label>Customer Name:</label></td>
                  <th>  <input type="text" name="c_name" value="<?php echo $name;?>"  style="max-width:200px;  height:20px;" readonly/>
                </th>
            </tr>
                <tr>
                    <td>
                        <label>Address:</label></td>
                   <th> <input type="text" name="c_name" value="<?php echo $address;?>" style="max-width:200px; height:20px;"readonly/></th>
               </tr>
                <tr><td>
                    <label>Phone Number:</label></td>
                   <th> <input type="text" name="c_name" value="<?php echo $password;?>" style="max-width:200px; height:20px;"readonly/></th>
                </tr>  </table>
               </div>
			   
			   
           <div id ="meta">
            <table>
                <tr>
                    <td><label>Invoice #</label></td>
                    <th> <input type="text" name="i_name" style="max-width:200px; height:20px;" value="09434"readonly/></th>
                </tr>
                <tr>

                    <td><label>Date</label></td>
                    <th> <input type="text" name="i_name" style="max-width:200px; height:20px;" value="12/02/2020"readonly/></th>
                </tr>

            </table>
        </div>
	</div>
	<div id="items">
				<table id="items">
		
		  <tr>
		      <th colspan="3" >Item</th>
		       <th>Quantity</th>
		      <th>Price</th>
		    
		      <th>Amount</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name" colspan="3"><div class="delete-wpr"><textarea>Super Glue 929</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		        <td><textarea class="qty">1</textarea></td>
		      <td><textarea class="cost">650.00</textarea></td>
		    
		      <td><span class="price">650.00</span></td>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name" colspan="3"><div class="delete-wpr"><textarea>Super Glue AKH</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		       <td><textarea class="qty">3</textarea></td>
			  <td><textarea class="cost">75.00</textarea></td>
		     
		      <td><span class="price">225.00</span></td>
		  </tr>
            
		  
		  <tr id="hiderow">
		    <td colspan="6"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		
		  <tr>

		      <td colspan="4" class="blank"> </td>
		      <td colspan="1" class="total-line">Total</td>
		      <td class="total-value"><div id="total">$875.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="4" class="blank"> </td>
		      <td colspan="1" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">$0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="4" class="blank"> </td>
		      <td colspan="1" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$875.00</div></td>
		  </tr>
		
		</table>
		
</div>
	
<div id="foot-container">
    <div class="Delivery-mood">
        <button><a href="delivery.php">Delivery</a></button>
    </div>
    <div class="takeaway-mood">
        <button><a href="takeaway.php">Take Away</a></button>
    </div>
</div>	
	
</body>

</html>