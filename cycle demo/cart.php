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
<form method="post">
<table style="color:black;width:30%;font-size: 17px;margin-right: 10px;margin-left: 67%;padding:20px;position:relative;top:90px;z-index:12;">
<?php
   include 'connection.php';
   $sel1=mysqli_query($conn,"SELECT * FROM cart where user_id ='".$_SESSION['user_id']."'");
   $c=0;
   if(mysqli_num_rows($sel1) > 0)
   {
      while($ft=mysqli_fetch_assoc($sel1))
      {
         $sel=mysqli_query($conn,"SELECT * FROM orders where pid='".$ft['product_id']."'");
         if(mysqli_num_rows($sel)>0)
         {
            while($fe=mysqli_fetch_assoc($sel))
            {
               $c=$c+1;
               echo "
               <tbody style='color:white;width:30%;font-size: 15px;margin-left:30px;padding:10px'><tr id='tr".$ft['product_id']."'>
               <td><center>".$c."</center></td>
               <td><center><img src='".$fe['pimage']."' height='90px' width='100px'></center></td>
               <td><center>".$fe['pname']."</center></td>
               <td><center>".$fe['pmodel']."</center></td>
               <td><center>$".$fe['pcost']."</center></td>
               <td><center><a id=".$ft['product_id']." class='btn btn-light btn-sm ml-2 ad' style='color:black';>Remove</a></td></center></td>
               </tr>                
               </tbody>
               </form>";
            }
         } 
      }
   }
?>
</div>
</form>
</table>
</html>

<script>
   $(document).ready(function(){
      $(".ad").click( function(){
         var pid = $(this).attr('id');
         $.get('delete.php?product_id='+pid, function(data,status)
         {
            $('#tr'+pid).remove(); 
            $('#cart_count').text(data);       
         });
      })
   })
</script>