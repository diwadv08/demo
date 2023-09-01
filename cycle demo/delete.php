<?php
    session_start();
    
?>

<?php
include 'connection.php';
if(isset($_GET['product_id']))
{ 
    mysqli_query($conn,"delete from cart where product_id = '".$_GET['product_id']."' && user_id='".$_SESSION['user_id']."'");

    $sel1=mysqli_query($conn,"SELECT * FROM cart where user_id='".$_SESSION['user_id']."'");
     echo mysqli_num_rows($sel1);
}
?>
