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

<?php
    $sel=mysqli_query($conn,"SELECT * FROM orders where pid='".$_GET['pid']."'");
        if(mysqli_num_rows($sel)>0)
        {
            $fe=mysqli_fetch_assoc($sel);
            echo "<form method='post'>
            <center>
            <div id='ibuy'></div>
            <table cellpadding='45px'>
            <tr>
            <td>
            <a href='#ibuy' class='btn btn-dark m-auto buy' style='margin-right:100px'>BUY NOW</a><td></tr></td>
            </tr>
            <input type='hidden' name='product_id' value='".$fe['pid']."' >
            <input type='hidden' name='product_qty' value='1' >
            <input type='hidden' name='product_cost' value='".$fe['pcost']."' >
            <input type='hidden' name='product_img' value='".$fe['pimage']."' >
            <tr><td rowspan='7'>
            <img src=".$fe['pimage']." height=320px!important' width='390px' class='img-responsive'></td></tr>
            <tr><td style='font-size:24px;color:black'><b>Item Type:</td></b><td style='font-size:24px;color:darkred;font-weight:600'>".$fe['pname']."</td></td></tr>
            <tr><td style='font-size:24px;color:black'><b>Cost:<td style='font-size:24px;color:darkred;font-weight:600'>".$fe['pcost']."</td></td></tr>
            <tr><td style='font-size:24px;color:black'><b>Color:</b><td style='font-size:24px;color:darkred;font-weight:600'>".$fe['pcolor']."</td></td></tr>
            <tr><td style='font-size:24px;color:black'><b>Brand:</b><td style='font-size:24px;color:darkred;font-weight:600'>".$fe['pmodel']."</td></td></tr>
            <tr>
            </tr>
            </table>
            
            </form> ";
        }
?>

<script>
    $(document).ready(function(){
        $(".buy").click(function(){
            $("#ibuy").load("buy.php");
        });
    });
</script>