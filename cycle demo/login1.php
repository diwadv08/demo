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
?>      <script>
            alert("Login Invalid");
        </script>
<?php    
    }
}
?>   
