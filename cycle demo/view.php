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

<div id="ihome"></div>
<div id="ibuy"></div>
<div class="header_section header_bg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="home">
        <a href="#" class="logo"><img src="images/logo.png" style="margin-top:10px"></a>
    </nav>     
</div>
<div class="container">
    <?php 
        include 'connection.php';
        if(isset($_GET["pid"]))
        {
             $sel=mysqli_query($conn,"SELECT * FROM orders where pid='".$_GET['pid']."'");
                if(mysqli_num_rows($sel)>0)
                {
                    $fe=mysqli_fetch_assoc($sel);
                    echo "<form method='post'>
                        <table cellpadding='25px'>
                        <tr>
                        <td>
                        <a class='btn btn-info home'>Home</a>
                        <a href='buy.php' class='btn btn-dark ml-4 buy'>BUY NOW</a><td></center></tr></td>
                        </tr>
                        <input type='hidden' name='product_id' value='".$fe['pid']."' >
                        <input type='hidden' name='product_qty' value='1' >
                        <input type='hidden' name='product_cost' value='".$fe['pcost']."' >
                        <input type='hidden' name='product_img' value='".$fe['pimage']."' >
                        <tr><td rowspan='7'><center>
                        <img src=".$fe['pimage']." height=320px!important' width='300px' class='img-responsive'></center></td></tr>
                        <tr><td style='font-size:24px;color:black'><b>Item Type:</td></b><center><td style='font-size:24px;color:darkred;font-weight:600'>".$fe['pname']."</td></td></tr>
                        <tr><td style='font-size:24px;color:black'><b>Cost:<td style='font-size:24px;color:darkred;font-weight:600'>".$fe['pcost']."</td></td></tr>
                        <tr><td style='font-size:24px;color:black'><b>Color:</b><center><td style='font-size:24px;color:darkred;font-weight:600'>".$fe['pcolor']."</center></td></td></tr>
                        <tr><td style='font-size:24px;color:black'><b>Brand:</b><center><td style='font-size:24px;color:darkred;font-weight:600'>".$fe['pmodel']."</center></td></td></tr>
                        <tr>
                        </tr>
                        </table>
                        </form> ";
                }
            }
    ?>
</div>
</body>
</html>



<script>
    $(document).ready(function(){
        $("body").on("click",".home",function(event){
            event.preventDefault();
            $("#ihome").load("index.php").show();
            $("#html").hide();
        });
        $("body").on("click",".buy",function(event){
            event.preventDefault();
            $("#ibuy").load("buy.php");
        });
    });
</script>