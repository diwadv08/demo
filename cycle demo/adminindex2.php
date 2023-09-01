<?php
  session_start();
?>
<?php
include 'connection.php';  
if($_SESSION['username']=="")
{
    header("Location: adminlogin.php");
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
<body style="background-image:url('images/about-bg.jpg');background-repeat:repeat;background-position: center;background-size:active;background-attachment:fixed;">
	<div class="header_section header_bg">
    	<nav class="navbar navbar-expand-lg navbar-light bg-light" id="home">
        	<a href="#" class="logo"><img src="images/logo.png" style="margin-top:10px"></a>
    	</nav>     
	</div>
	<a href="adminindex1.php" class="btn btn-primary ml-5 mt-3 mb-3" style="float:left;">Back</a>
	<a href="adminlogin.php" class="btn btn-danger mr-5 mt-3 mb-3" style="float:right;">Logout</a>
	<table class="table table-bordered mt-4">
	<tr>
		<th style='color:white'><center>Id</center></th>
		<th style='color:white'><center>Name</center></th>
		<th style='color:white'><center>Phone</center></th>
		<th style='color:white'><center>Email_ID</center></th>
		<th style='color:white'><center>Address1</center></th>
		<th style='color:white'><center>Address2</center></th>
		<th style='color:white'><center>Date</center></th>
		<th style='color:white'><center>Expected Date</center></th>
		<th style='color:white'><center>Payment Method</center></th>
		<th style='color:white'><center>Status</center></th>
	</tr> 
</body>
</html>


<?php
	include 'connection.php';
	$sel=mysqli_query($conn,"SELECT * FROM buy");
	if(mysqli_num_rows($sel)>0)
	{
		while ($fe=mysqli_fetch_assoc($sel)) 
		{
			echo "
			<tr>
				<td style='color:white'><center>".$fe['id']."</center></td>
				<td style='color:white'><center>".$fe['name']."</center></td>
				<td style='color:white'><center>".$fe['phone']."</center></td>
				<td style='color:white'><center>".$fe['email_id']."</center></td>
				<td style='color:white'><center>".$fe['address']."</center></td>
				<td style='color:white'><center>".$fe['paddress']."</center></td>
				<td style='color:white'><center>".$fe['date']."</center></td>
				<td style='color:white'><center>".$fe['exp_date']."</center></td>
				<td style='color:white'><center>".$fe['p_using']."</center></td>
				<td style='color:white'><center>
				<button class='btn btn-success btn-sm ml-3 dbb'>Delivered</button>
				<button class='btn btn-primary btn-sm  ml-3 pbb'>Processing</button>
				<button class='btn btn-danger btn-sm  ml-3 ubb'>Unavailable</button></center>
				</td>
			</tr> ";
		}
	}
?>


<script>
	$(document).ready(function(){
		$("body").on("click",".dbb",function(){
			$(this).closest("tr").css("background-color","green");
		});
		$("body").on("click",".pbb",function(){
			$(this).closest("tr").css("background-color","blue");
		});
		$("body").on("click",".ubb",function(){
			$(this).closest("tr").css("background-color","red");
		});
	});
</script>