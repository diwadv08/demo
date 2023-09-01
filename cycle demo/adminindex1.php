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
<body style="background-image:url('images/about-bg.jpg');background-repeat:repeat;background-position: center;background-size:auto;background-attachment:fixed;">
    <div class="header_section header_bg">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="home">
            <a href="#" class="logo"><img src="images/logo.png" style="margin-top:10px"></a>
        </nav>     
    </div>    
    <div class="container bt">
        <a href="adminindex2.php" class="btn btn-success c mt-5"  style="text-decoration: none;color:black">Number Of Orders</a><br><br><br><br>
        <a href="adminindex3.php" class="btn btn-success c" style="text-decoration: none;color:black">Call Back Messages</a><br><br><br><br>
        <a href="adminlogin.php" class="btn btn-danger mr-5 mt-3 mb-3" style="float:right;">Logout</a>
    </div>
</body>
</html>