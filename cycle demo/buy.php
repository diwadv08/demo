<?php
  session_start();
?>
<?php
include 'connection.php';  
if($_SESSION['email']=="")
{
    header("Location: login.php");
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="asserts\doc\style.css">
	<title>cycle</title>

</head>
<body style="background-image:url('images/about-bg.png');background-repeat:repeat;background-size:100%;">

<form method="post" id="iform">
<div class="container">
	<br><br><h2 class="text-center mt-4" style="font-weight: 700;color:skyblue;margin-top:300px;">ORDER NOW</h2>
				<div class="form-row">
  				<div class="form-group col-md-9 m-auto m-auto" style="color:white;">*Name:
	    			<input type="text" class="form-control" id="inputMob" name="name" placeholder="Enter your name ">
	  			</div>
	  		</div>
				<div class="form-row">
	  			<div class="form-group col-md-9 pt-4 m-auto" style="color:white;">*Mobile No
	    			<input type="text" class="form-control" id="inputMob" name="mobno" placeholder="Enter your mobile number" required>
	  			</div>
	  		</div>
	  		<div class="form-row">
    			<div class="form-group col-md-9 pt-4 m-auto" style="color:white;">*Payment Method:
      			<select name="pay" style="width:100%;height:40px;background-color:ghostwhite;color:bold;border: none;border-radius: 5px;">
      				<option selected hidden><center>---Select---</center></option>
      				<option>Cash On Delivery</option>
      				<option>Gpay</option>
      				<option>Credit Card</option>
      				<option>Debit Card</option>
      			</select>
    			</div>
    		</div>
	  		<div class="form-row">
    			<div class="form-group col-md-9 pt-4 m-auto" style="color:white;">*Email:
      			<input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Enter your email">
    			</div>
    		</div>
	  		<div class="form-row">
	  			<div class="form-group col-md-9 pt-4 m-auto" style="color:white;">*Present Address:
	    			<input type="text" class="form-control" id="inputMob" name="address1" placeholder="Enter your Present Address" required>
	  			</div>
	  		</div>
	  		<div class="form-row">
	  			<div class="form-group col-md-9 pt-4 m-auto" style="color:white;">Permanent Address:
	    			<input type="text" class="form-control" id="inputMob" name="address2" placeholder="Enter your Permanent Address">
	  			</div>
	  		</div>
    		<div class="form-row">
    			<div class="form-group col-md-9 pt-4 m-auto" style="color:white;">Date:
      			<input type="date" class="form-control" name="date" id="inputPassword4">
    			</div>
    		</div>
    		<div class="form-row">
    			<div class="form-group col-md-9 pt-4 m-auto" style="color:white;">Expected Delivery Date:
      			<input type="date" class="form-control" name="edate" id="inputPassword4">
    			</div>
    		</div>
    	</div>
	  	<div class="text-center pt-4 m-auto">
			<input type="submit" name="payb" class="btn btn-success mb-5 pb" value="Pay">
			<a href="#" name="cancb" class="btn btn-dark ml-4 mb-5">Cancel</a>
			
 		</div>
</div>
</form>
</body>
</html>

<script>
	$(document).ready(function(){
		$(".pb").click(function(){
			$.ajax({
				url:"buy1.php",
				type:"post",
				data:$("#iform").serialize(),
				success:function(d){
					alert(d);
					$("#iform")[0].reset();
				}
			});
		});
	});
</script>