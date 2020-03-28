<html>
 <head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
	body{
		background-color:black;
		width: 0 auto;
		height: 100%;
		background-size: cover;
		background-repeat: no-repeat;
	}
	.banner {
		height: 540px;
		max-width: 400px;
		margin: 60px auto 40px auto;
		background-color: rgba(20,25,40,0.5);
		display: flex;
		/*border-radius: 20px;*/
	}

	.center-me {
		color: #FFF;
		/*font-size: 50px;*/
		margin: auto;
	}
</style>
</head>
<body>

	<div class="container">
		<div class="banner rounded">
			<div class="center-me">
				<h3><center>Admin Login</center></h3>
				<form method="POST" action="admin_login.php">
				
					<div class="form-group">
						<label for="address">User Name</label>
						<input type="text" class="form-control" placeholder="Example@gmail.com" name="username" required/>
					</div>
					<div class="form-group">
						<label for="phone_number">Password</label>
						<input type="password" class="form-control" placeholder="Password" name="password" required/>
					</div>
					<button type="submit" class="btn btn-primary btn-success" style="width:300px;">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>   
</html>