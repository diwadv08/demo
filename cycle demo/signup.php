<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="asserts\doc\style.css">
	<title>movie</title>

</head>
<body style="background-image:url('images/about-bg.png');background-repeat: no-repeat;background-attachment: fixed;background-size:100%;">
<div class="header_section header_bg" style="padding-bottom: 60px;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="home" style="position:fixed;width: 100%;">
        <a href="#" class="logo"><img src="images/logo.png"></a>
    </nav>     
</div>
<form method="post" enctype="multipart/form-data" style="position:relative;">
<div class="container">
	<h2 class="text-center pt-4" style="font-weight: 700;color:skyblue;position: relative;">SIGN IN</h2>
		<div class="form-row">
  			<div class="form-group col-md-4 pt-2 m-auto" style="color: white;">Name:
	    	<input type="text" class="form-control" id="inputMob" name="name" placeholder="Enter your name">
	  		</div>
	  	</div>
		<div class="form-row">
	  		<div class="form-group col-md-4 pt-3 m-auto"  style="color: white;">Mob No:
	    	<input type="text" class="form-control" id="inputMob" name="mobno" placeholder="Enter your mobile number">
	  		</div>
	  </div>
	  <div class="form-row">
    		<div class="form-group col-md-4 pt-3  m-auto"  style="color: white;">Place:
      			<input type="text" class="form-control" name="place" placeholder="Enter your place">
    		</div>
    </div>
		<div class="form-row">		
    		<div class="form-group col-md-4 pt-3 m-auto" style="color: white;">Date
      			<input type="date" class="form-control" name="date" id="inputPassword4">
    		</div>
    </div>
	  <div class="form-row">
    		<div class="form-group col-md-4 pt-3  m-auto" style="color: white;">Email:
      			<input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" required>
    		</div>
    </div>
		<div class="form-row">		
    		<div class="form-group col-md-4 pt-3 m-auto" style="color: white;">Password:
      			<input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" required>
    		</div>
    </div>
	  	<div class="text-center pt-4  m-auto">
			<button type="submit" name="signin" class="btn btn-success">Sign in</button>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="login.php"><button type="button" name="back" class="btn btn-dark">Back</button></a>
 		</div>
</div>


<?php
include 'connection.php';
$s="";
if(isset($_POST['signin']))
{
  	$sel=mysqli_query($conn,"SELECT email_id from signup where email_id ='".$_POST['email']."'");
		if(mysqli_num_rows($sel)>0)
		{
?>			
			?><script>
            alert("Email Id Already Exists");
        </script>
<?php 		
			die;
		}
	 	else
	 	{
	 		$ins= mysqli_query($conn,"INSERT INTO signup(name,phone,place,email_id,password,date)VALUES ('".$_POST['name']."','".$_POST['mobno']."','".$_POST['place']."','".$_POST['email']."','".$_POST['password']."','".$_POST['date']."')");
 			
			header("Location: login.php");
	 }
}
?>


</form>
</body>
</html>