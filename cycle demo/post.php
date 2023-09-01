<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php
	session_start();
?>
<?php
	include 'connection.php';
	$txt=$_POST['isearch'];
	$sel=mysqli_query($conn,"SELECT * FROM orders where pmodel LIKE '%".$_POST['isearch']."%'");
	if(mysqli_num_rows($sel) > 0)
	{
		while($fe=mysqli_fetch_assoc($sel))
		{
			
			echo "<div class='search_results' id='".$fe['pid']."'>
			".$fe['pname']." ";
			echo $fe['pcost']." ";
			echo $fe['pcolor']." ";
			echo $fe['pmodel']." ";
			echo "<img src='".$fe['pimage']."' height=100px width=60px class='im'>"."</div><br>";
		}	
	}
?>

<script>
	$(document).ready(function(){
		$('.search_results').click(function() {
         	test_function($(this).attr('id'));
      	})
	});
</script>