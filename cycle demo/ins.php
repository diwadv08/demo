<?php
    session_start();
?>
<?php    
    include 'connection.php';
    $sec=mysqli_query($conn,"SELECT * from cart where product_id='".$_POST['product_id']."' && user_id='".$_SESSION['user_id']."'");
    if(mysqli_num_rows($sec)>0)
    {
        die;
    }
    else 
    {
        if($_SESSION['user_id']==0)
        {
            die;
        }
        else
        {
            $ins=mysqli_query($conn,"INSERT INTO cart (product_id,user_id,qty,price)values ('".$_POST['product_id']."','".$_SESSION['user_id']."','".$_POST['product_qty']."','".$_POST['product_cost']."')");
            $sel1=mysqli_query($conn,"SELECT * FROM cart where user_id='".$_SESSION['user_id']."'");
            if(mysqli_num_rows($sel1) > 0)
            {
                 echo mysqli_num_rows($sel1);
            }
        }
    }
?>
