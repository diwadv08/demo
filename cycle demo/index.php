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
   include('connection.php');
   $sel=mysqli_query($conn,"SELECT * FROM cart where user_id='".$_SESSION['user_id']."'");
   $p="";
   if(mysqli_num_rows($sel)>0)
   {
      $p=mysqli_num_rows($sel);
   }
   
   
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>cycle</title>
	<link rel="stylesheet" type="text/css" href="file.css">
</head>
<body>
	<div class="header_section header_bg">
   <div id="diiv"></div>
   <nav class="navbar navbar-expand-lg" id="home" style="justify-content: space-between;">
           <a href="#" class="logo"><img src="images/logo.png"></a>  
           <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto" style="position: fixed;z-index: 12;width:100%;margin-top:13px;padding-left:50px;background:#274d5a;padding-top:10px;padding-bottom:10px;border-radius:0px 0px 0px 20px;color: white;border:5px solid skyblue;">
                  <li class="nav-item">
                     <a class="nav-link" href="#home" style="color:white;cursor: pointer;font-size:19px;font-weight:600; margin-right:15px;margin-top:10px;"><i class="fa-solid fa-house"></i></a>
                  </li>
                  <li>
                     <input type="text" name="search" placeholder="Search...." size=6 style="margin-top:13px;" id="isearch" class='iii'>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#ourcycle">Our Cycle</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link shoo" href="#iiishop" style="cursor: pointer;">Shop</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#news">News</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#contact">Contact Us</a>
                  </li>
                  <form class="form-inline my-2 my-lg-0" method="post">
                  <li>
                     <a href="#div" id="count" style="color:white;cursor: pointer;font-size:19px;font-weight:700; margin-left:15px;">
                     <i class="fa-solid fa-cart-plus icn"></i></a><small id="cart_count" style="margin-top:-10px"><?=$p;?></small>
                     <small style="color:white;cursor: pointer;font-size:16px;padding:0px 0px;border-radius:100%;" id="vdiv"></small>
                     </li>
                     <li><a href="#diiv" class='usss' style="color:white;cursor: pointer;font-size:19px;font-weight:700; margin-left:15px"><i class="fa-regular fa-user"></i></a></li>
                     <li><a href="logout.php" class="btn btn-outline-info lg" style="color:white;!important; margin-left:15px;margin-right: 90px;">Logout</a></li>
                  </form>
               </ul>
            </div>
            <div id="main">
               <span style="font-size:6px;cursor:pointer; color:white" onclick="openNav()">
                  <img src="images/toggle-icon.png" style="height: 35px;margin-top: -10px;">
               </span>
            </div> 
         </nav>
         <div id="divm">
            <div id="div" class="mt-2"></div>
         </div>
         <div class="banner_section layout_padding">
            <div id='boxie' style="margin-left:38%;color:white;"></div>
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="best_text">Best</div>
                              <div class="image_1">
                              	<img src="images/img-1.png">
                              </div>
                           </div>
                           <div class="col-md-5">
                              <h1 class="banner_taital">New Model Cycle</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content </p>
                              <div class="contact_bt">
                                 <a class="iss" href="#iiishop" style="cursor: pointer;color:black;">Shop Now</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="best_text">Best</div>
                              <div class="image_1"><img src="images/img-1.png"></div>
                           </div>
                           <div class="col-md-5">
                              <h1 class="banner_taital">New Model Cycle</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content </p>
                              <div class="contact_bt">
                                 <a class="iss" href="#iiishop" style="cursor: pointer;color:black;">Shop Now</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="best_text">Best</div>
                              <div class="image_1"><img src="images/img-1.png"></div>
                           </div>
                           <div class="col-md-5">
                              <h1 class="banner_taital">New Model Cycle</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content </p>
                              <div class="contact_bt">
                                 <a href="#iiishop" class="iss" style="cursor: pointer;color:black;">Shop Now</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <div class="about_section layout_padding" style="background-image:url(images/about-bg.png);"id="about">
         <div class="container">
            <h1 class="about_taital">About</h1>
            <p class="about_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
            </p>
            <div class="about_main">
               <img src="images/img-5.png" class="image_5">
            </div>
            <div class="read_bt_1"><a href="#">Read More</a></div>
         </div>
      </div>
      <div class="cycle_section layout_padding" id="ourcycle">
         <div class="container">
            <h1 class="cycle_taital">Our cycle</h1>
            <p class="cycle_text">It is a long established fact that a reader will be distracted by the </p>
            <div class="cycle_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <div class="box_main">
                        <h6 class="number_text">01</h6>
                        <div class="image_2">
                           <img src="images/img-2.png">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <h1 class="cycles_text">Cycles</h1>
                     <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                     <div class="btn_main">
                        <div class="buy_bt"><a href="buy.php">Buy Now</a></div>
                        <h4 class="price_text">Price <span style=" color: #f7c17b">$</span> <span style=" color: #325662">12000</span></h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="cycle_section_3 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="cycles_text">Stylis Cycle</h1>
                     <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                     <div class="btn_main">
                        <div class="buy_bt"><a href="buy.php">Buy Now</a></div>
                        <h4 class="price_text">Price <span style=" color: #f7c17b">$</span> <span style=" color: #325662">8200</span></h4>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="box_main_3">
                        <h6 class="number_text_2">02</h6>
                        <div class="image_2">
                           <img src="images/img-3.png">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="cycle_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <div class="box_main_3">
                        <h6 class="number_text_2">03</h6>
                        <div class="image_2"><img src="images/img-4.png"></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <h1 class="cycles_text">Mordern <br>Cycle</h1>
                     <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                     <div class="btn_main">
                        <div class="buy_bt"><a href="buy.php">Buy Now</a></div>
                        <h4 class="price_text">Price 
                        	<span style=" color: #f7c17b">$</span> 
                        	<span style=" color: #325662">15200</span></h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="read_btn_main">
               <div class="read_bt mb-5"><a href="#">Read More</a></div>
            </div>
         </div>
      </div>
      <div id="divii"></div>
      <div class="cycle_section layout_padding" id="iiishop">
         <div class="container">
            <h1 class="cycle_taital" style="margin-bottom: 30px;">Shop</h1>
            <div class="row">
                  <?php 
                     include 'connection.php';
                     $sel=mysqli_query($conn,"SELECT * FROM orders");
                     if(mysqli_num_rows($sel)>0)
                     {
                        while($fe=mysqli_fetch_assoc($sel))
                        {
                           echo"
                           <div id='div11'></div>
                           <div class='col-sm-4 text-center' id='product".$fe['pid']."'>
                           <img src=".$fe['pimage']." height='170px!important' width='190px!important 'class='img-responsive mt-3 mb-3' style='margin-left:30px'>
                           <center>
                           <h4 class='mt-5' style='font-size:25px;color:orange'>".$fe['pmodel']."</h4>
                           <h4 style=';font-size:25px;font-weight:700'>$".$fe['pcost']."</h4>
                           </center>
                           <center>
                           <a title='View Product Details' href='#div11' class='btn btn-outline-success btn-sm mt-3 mb-3 eye' eid='".$fe['pid']."'><i class='fa fa-eye eye'></i></a>
                           <a class='btn btn-outline-warning btn-sm mt-3 mb-3 iad' id='".$fe['pid']."' data_price= '".$fe['pcost']."' style='color:black'><i class='fa-solid fa-cart-plus iad'></i></a>                          
                           </center>
                           </form>
                           </center>
                           </div>
                           ";
                        }
                     }
                  ?>
               </div>
         </div>
      </div>
      <div class="news_section layout_padding" id="news">
         <div class="container">
            <h1 class="news_taital">News</h1>
            <p class="news_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
            <div class="news_section_2 layout_padding">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="box_main_1">
                        <div class="zoomout frame"><img src="images/img-6.png"></div>
                        <div class="padding_15">
                           <h2 class="speed_text">Speed cycle</h2>
                           <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="box_main_1">
                        <div class="zoomout frame"><img src="images/img-7.png"></div>
                        <div class="padding_15">
                           <h2 class="speed_text">Speed cycle</h2>
                           <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="box_main_1">
                        <div class="zoomout frame"><img src="images/img-8.png"></div>
                        <div class="padding_15">
                           <h2 class="speed_text">Jaump cycle</h2>
                           <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
       <div class="contact_section layout_padding" id="contact">
         <div class="container">
            <div class="contact_main">
               <h1 class="request_text">A Call Back</h1>
               <form method="post">
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Name" name="name" id="iname">
                  </div>
                  <div class="form-group">
                     <input type="email" class="email-bt" placeholder="Email" name="email" id="iemail">
                  </div>
                  <div class="form-group">
                     <input type="number" class="email-bt" placeholder="Phone Number" name="phone" id="iphone">
                  </div>
                  <div class="form-group">
                     <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="massage"></textarea>
                  </div>
               <div class="send_btn">
                  <input type="submit" value="Send" name="snd" id="isnd" class="btn btn-info">
               </div>
               </form>
            </div>
         </div>
      </div>
      <div class="footer_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-8 col-sm-12 padding_0">
                  <div class="map_main">
                     <div class="map-responsive">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125406.10469901418!2d78.689028!3d10.81584465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf50ff2aecdad%3A0x6de02c3bedbbaea6!2sTiruchirappalli%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1688293291928!5m2!1sen!2sin" width="600" height="350" style="border:10px solid skyblue; width: 93%;margin-left: 40px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12 mb-5">
                  <div class="call_text"><a href="#"><img src="images/map-icon.png"><span class="padding_left_0">Trichy</span></a></div>
                  <div class="call_text"><a href="#"><img src="images/call-icon.png"><span class="padding_left_0">Call Now  9876543210</span></a></div>
                  <div class="call_text"><a href="#"><img src="images/mail-icon.png"><span class="padding_left_0">someone@gmail.com</span></a></div>
                  <div class="social_icon">
                     <ul>
                        <li><a href="#"><img src="images/fb-icon1.png"></a></li>
                        <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                        <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                     </ul>
                  </div>
                  <input type="text" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
                  <div class="subscribe_bt"><a href="#">Subscribe</a></div>
               </div>
                <a href="#home" id="iccc"><b><i class="fa-sharp fa-solid fa-arrow-up" style="margin-left:1200px;margin-bottom:10px;color:#355764;"></b></i></a>
            </div>
         </div>
      </div>
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">@Copyright 2023</p>
         </div>
      </div>
</body>
</html>
<script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
         function openNav() {
           document.getElementById("main").style.marginLeft = "250px";
         }
         
         function closeNav() {
           document.getElementById("main").style.marginLeft= "0";  
         }
         

</script>
<?php
   if(isset($_POST['snd']))
   { 
      $sel=mysqli_query($conn,"SELECT email from callback where email='".$_POST['email']."'");
      if(mysqli_num_rows($sel)>0)
      {
         die;
      }
      $ins=mysqli_query($conn,"INSERT INTO callback (name,email,phone,message) values ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['massage']."')");
      if($ins)
      {
?>     
         <script>
            alert("Thank you for your response");
         </script>
<?php      
      }   
   }
?>
<script>

   function test_function(pid) {
      location.href = "#product"+pid
   }

   $(document).ready(function(){
      $(".icn").click(function(){
         $("#div").load("cart.php").toggle();
      });

      $("#main").click(function(){
             $("#navbarSupportedContent").toggleClass("nav-normal");
      });
      $(".eye").click(function(){
         $("#div11").hide();
         var eid = $(this).attr('eid');
         if(eid !== undefined)
         {
            $("#div11").load("view1.php?pid="+eid).show();
         }
      });

      $("body").on("click",".usss",function(){
         $("#diiv").load("user.php").toggle();
      }); 

      $("#isearch").keyup(function(){
         var a=$(this).val();
         $.post('post.php',{isearch:a},function(data){
            $("#boxie").html(data);
         });
      });

      $(".iad").click(function(event){
         event.preventDefault();
         var id = $(this).attr('id');
         var cost = $(this).attr('data_price');
         var qty=1;
         $.ajax({            
            url:"ins.php",
            type:"post",
            data: {'product_id': id, 'product_cost': cost ,'product_qty':qty},
            success:function(d)
            {
               $('#cart_count').text(d);
            }
         });
         $(this).css({
            'background-color':'white',
            'color':'black',
            'border-color':'black'
         });
      });
   });
</script>