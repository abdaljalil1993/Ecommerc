<?php
session_start();
ob_start();

unset($_SESSION['uid']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Council App</title>
	<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css"/>
<!--Floating WhatsApp css-->
<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<!--Floating WhatsApp javascript-->
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<style type="text/css">
	html {
  scroll-behavior: smooth;
}

	body{
		margin: 0;
		padding: 0;
	}

	.top-bar{
		width: 100%;
		background-color: #21537C;
		height: 40px;
		padding: 3px;
		color: #D69B25;
		font-weight: bold;

	}
	.social1{
		float: left;
		padding: 5px;
		list-style-type: none;
	}
.social1 li {
		float: left;
		margin-right: 8px;
	}
	.social{
		float: right;
		padding: 5px;
		list-style-type: none;
	}
	.social li {
		float: left;
		margin-right: 8px;
	}

	.mynav{
		background-color:rgba(10,54,108,0.6);
		width: 100%;
	}

	.mynav nav{
		width: 100%;
	}
.a:hover{
	color: red;
}
.x:hover{
	background-color: rgb(214,155,37);


}

.x:focus{
	background-color: rgb(214,155,37);
}

.about{
	width: 100%;
	height: 300px;
}


.image-container {
    position: relative;
    width: 100%;
    
}
.image-container .after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
   background-color:rgba(10,54,108,0.8);
    color: #FFF;
}

.c{
	box-shadow: 0px 0px 3px 3px #cecece;
}
.c:hover{
	box-shadow: 0px 0px 4px 4px #D69B25;
	margin-top: -5px;
	transition: .4s ease;
}

.img-thumbnail{
	width: 190px;
	height: 100px;
}
</style>

</head>
<body>

<div class="container-fluid top-bar" >
    <span style="margin-left: 10px"> <i style="color:#D69B25;font-size: 15px; " class=" fab fa-whatsapp"></i>+963 997 737 795</span> | <span style="margin-left: 10px"> <i style="color:#D69B25;font-size: 15px; " class=" fa fa-phone"></i>+963 997 737 795</span>

    <ul class="social">
  <li>    <a href="login.php" class="btn btn-outline-warning btn-sm">Admin</a></li>

      <li><a href="#"><i style="color:#D69B25;font-size: 16px; " class=" fab fa-facebook"></i></a></li>
      <li><a href="#"><i style="color:#D69B25;font-size: 16px; " class=" fab fa-twitter"></i></a></li>
      
      <li><a href="#"><i style="color:#D69B25;font-size: 16px; " class=" fab fa-instagram"></i></a></li>
    </ul>
    
  </div>

<div style="background-image: url('images/mm.jpg');background-repeat: no-repeat;background-size: cover;background-attachment: fixed; height: 680px; ">
<div style="background-color:rgba(10,54,108,0.2);width: 100%;height: 680px; ">
  <div class="mynav">
  <?php
include 'adminnav.php';
?>
</div>

<div style="height:200px;"></div>

  <div class="col-12 text-center" style=" margin: 0px auto;z-index: 0;color: white">
 <h1>Moda | Fashion | Clothes</h3>
  <h1>Design | Creative | Inspiration</h3>
  </div>

</div>
<!-- background-color:rgba(108,113,131,0.8); -->
</div>



 <div id="WAButton"></div>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up"></i></button>

 </div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script type="text/javascript">
  $(function() {
  $('#WAButton').floatingWhatsApp({
    phone: '00963 997 737 795', //WhatsApp Business phone number International format-
    //Get it with Toky at https://toky.co/en/features/whatsapp.
    headerTitle: 'Chat with us on WhatsApp!', //Popup Title
    popupMessage: 'Hello, how can we help you?', //Popup Message
    showPopup: true, //Enables popup display
    buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
    //headerColor: 'crimson', //Custom header color
    //backgroundColor: 'crimson', //Custom background button color
    position: "left"    
  });
});



  $(document).ready(function(){
    $("#bb").click(function(){
      $("#xx").slideToggle(1000);
    });
  });
</script>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
      document.getElementById("navbar").style.height = "auto";
    document.getElementById("logo").style.height = "69px";
     document.getElementById("logo").style.width = "95px";
     document.getElementById("nn").style.fontSize = "20px";
  } else {
  document.getElementById("navbar").style.height = "auto";

   document.getElementById("logo").style.height = "100px";
     document.getElementById("logo").style.width = "150px";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>




</body>
</html>

<?php

include'conn.php';

$x=isset($_POST['e'])?$_POST['e']:'';
$x=mysqli_real_escape_string($con,$x);
$y=isset($_POST['p'])?$_POST['p']:'';
$y=mysqli_real_escape_string($con,$y);

if(isset($_POST['btn']))
{
   $result=mysqli_query($con,"select * from users1 where email='$x' and password='$y'"); 


 if(mysqli_num_rows($result) >0 )
  {
    echo '<script type="text/javascript">toastr.success("Login Successfully");</script>';
    $r=mysqli_fetch_array($result);
    $_SESSION['n']=$r['name'];
    $_SESSION['uid']=$r['id'];
 

    header("Location: home.php");

  } 

 /* if($x=="admin@admin" && $y =="admin")
  {
      header("Location: admin.php");
  }*/
  else{
echo '<script type="text/javascript">toastr.error("Login failed <br> please try again later");</script>';

  }



}
ob_end_flush();

?>
