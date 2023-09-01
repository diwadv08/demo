<?php
  session_start();
?>
<?php
include 'connection.php';  
if($_SESSION['email']=="")
{
    header("Location: login.php");
}
$ins= mysqli_query($conn,"INSERT INTO buy(name,phone,email_id,address,paddress,date,exp_date,p_using)VALUES('".$_POST['name']."','".$_POST['mobno']."','".$_POST['email']."','".$_POST['address1']."','".$_POST['address2']."','".$_POST['date']."','".$_POST['edate']."','".$_POST['pay']."')");
	echo "Thank you for your order";
?>
