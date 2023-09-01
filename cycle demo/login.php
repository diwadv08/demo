<?php
    session_start();
?>
<?php
include 'connection.php';
$c="";


if(isset($_POST['login']))
{
    $sel=mysqli_query($conn,"SELECT email_id,password,id from signup where email_id='".$_POST['email']."' and password='".$_POST['password']."'");
    if(mysqli_num_rows($sel)>0)
    {
    	$fe=mysqli_fetch_assoc($sel);
      $_SESSION['email']=$_POST['email'];
      $_SESSION['user_id']=$fe['id'];
    	header("Location: index.php");
    }
    else
    {
?>    	<script>
            alert("Login Invalid");
        </script>
<?php    
	}
}
?>   


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
	<title>cycle</title>
	

</head>
<body style="background-image:url('images/about-bg.png');background-repeat: no-repeat;background-size:100%;">
<div class="header_section header_bg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="home">
        <a href="#" class="logo"><img src="images/logo.png" style="margin-top:10px"></a>
    </nav>     
</div>    
 <div class="container">
	<form method="post">
		<div>
			<a href="adminlogin.php" id="lvu"><h4 style="float:right;color:white;" class="btn btn-outline-info">Login Via Admin</h4></a>
		</div>
		<h2 class="text-center pt-4" style="margin-top: 100px;font-weight: 700;color:white;margin-left: 160px;"><i class="fa-solid fa-user-tie"></i>&nbsp;USER LOGIN</h2>
  		<div class="form-group col-md-6 pt-4 m-auto">
      		<center><input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email"></center>
    		</div>
    		<div class="form-group col-md-6 pt-4 m-auto">
      			<center><input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password"></center>
    		</div>
      <div class="text-center pt-4">
		  	<button type="submit" class="btn btn-danger mr-2" name="login">Login</button>
		  	<a href="signup.php" class="btn btn-success ml-2" name="signup">Sign up</a>
  		</div>
      </div>
<br><center><h4 style="color:white;"><?=$c;?></h4></center>
</form>
</body>
</html>



