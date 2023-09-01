<?php
    session_start();
?>
<?php
	$c="";
	include 'connection.php';
	$sel=mysqli_query($conn,"SELECT FROM cart where user_id='".$_SESSION['user_id']."'");
	$c=(mysqli_num_rows($sel);
		echo("$c");
?>