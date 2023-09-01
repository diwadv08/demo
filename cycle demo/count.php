<?php
	session_start();
?>
<?php
	include('connection.php');
	$sel=mysqli_query($conn,"SELECT * FROM cart where user_id='".$_SESSION['user_id']."'");
	if(mysqli_num_rows($sel)>0)
   	{
      echo mysqli_num_rows($sel);
  }
      
?>