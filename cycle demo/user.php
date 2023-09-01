<?php
    session_start();
?>
<?php
if($_SESSION['email']=="")
{
    header("Location: login.php");
}
?>
<form action="" method="post" enctype="multipart/form-data" style="width:30%;position:absolute;margin-left:42%">
<?php
include 'connection.php';
$sel=mysqli_query($conn,"SELECT name,email_id,phone from signup where email_id='".$_SESSION['email']."'");
if(mysqli_num_rows($sel)>0)
{
    while($fe=mysqli_fetch_assoc($sel))
    {
?>
    <br><br><h5 style="color:white;font-weight:400;font-size:12px;" class=" mt-5"><?php echo $fe['name'];?></h5>
    <h5 style="color:white;font-weight:400;font-size:12px" class=" mt-2">Phone No:<?php echo $fe['phone'];?></h5>
    <h5 style="color:white;font-weight:400;font-size:12px" class=" mt-2">Email:<?php echo $fe['email_id'];?></h5>
    <a href="logout.php" class="btn btn-danger  p-1" style="font-size:11px">Log out</a>
    
<?php   
}
}
?>


</form>