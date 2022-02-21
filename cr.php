<?php
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Council App</title>
	<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<!--Floating WhatsApp css-->
<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<!--Floating WhatsApp javascript-->
	  <meta charset="utf-8">
    <meta  lang="en">
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

<div style=" height: 80px; ">
<div style="background-color:rgba(10,54,108,0.2);width: 100%;height: 80px; ">
  <div class="mynav">
<?php
include 'adminnav.php';
?>
</div>

<div style="background-color: #fefefe;">
  <div style="height:30px;"></div>
<div class="container" >
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10" style="box-shadow: 0px 0px 10px 10px #c8c8c8">
        <div style="border-radius: 10px;background-color: rgba(255,255,255,0.6);padding:30px;">
   <h1 class="text-warning">All Competetion Request</h1> 
    <hr>
  <div class="table-responsive">
    <table id="xx" class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
       <th>name</th>
        <th>email</th>
          
        
        
           <th>Skills</th>

       <th>Resume</th>

     
          <th>Delete</th>
              <th>Download Resume</th>
      
    </tr>
  </thead>

  <tbody>
    <?php

    include'conn.php';

    /*
$con=mysqli_connect("localhost","bacttrai_WPERM","fadidebow@1993","bacttrai_WPERM")or die("error db".mysqli_error($con));

    */
    $t=mysqli_query($con,"select * from comp");
while($row=mysqli_fetch_array($t))
{
  echo'
<tr>
<td>'.$row['id'].'</td>
<td>'.$row['name'].'</td>
<td>'.$row['email'].'</td>

<td>'.$row['skils'].'</td>
<td>'.$row['resume'].'</td>

<td><a href="cr.php?id='.$row['id'].'" class="btn btn-danger">Delete</a></td>
<td><a href="upload/'.$row['resume'].'"  download="upload/'.$row['resume'].'" class="btn btn-success"  style="background-color:purple;color:green">Download Resume</a></td>

</tr>
  ';
}

  if(isset($_GET['id']))
    {
      $x=$_GET['id'];

      $t=mysqli_query($con,"delete from comp where id='$x'");
      if(isset($t)){
        echo '<script type="text/javascript">toastr.success("delete  Successfully");</script>';
       echo' <meta http-equiv="refresh" content="0 ;url=cr.php" />';
      }
    }
  
    ?>
  </tbody>
</table>


    </div>
    </div>

    <div class="col-md-1"></div>
  </div>
</div>
 <div style="height: 60px;"></div>
</div>



<div style="background-image: url('images/22.jpg');background-size: cover;background-attachment: fixed;background-repeat: no-repeat;">
  
<div style="width: 100%;  background-color:rgba(10,54,108,0.7);" >
    <div class="container-fluid" style="padding-bottom:8px;">
        <div style="height: 30px;"></div>
        <div class="row">
          
          <div class="col-md-4 col-sm-12">
            <h3 style="color: white;">Navigation</h3>
            <ul style="list-style-type: none;">
  <li ><i class="fa fa-angle-double-right text-warning"></i>
   <a style="color: white" class=" " href="index.php"> Home</a> </li>
  <li><i class="fa fa-angle-double-right text-warning"></i> <a href=""><a style="color: white;" href="index.php#about"> About Us</a></a></li>
  <li><i class="fa fa-angle-double-right text-warning"></i> <a style="color: white;" href="book.php"> decisions</a></li>

  <li><i class="fa fa-angle-double-right text-warning"></i>
    <a style="color: white;" href="index.php#contact"> Contact Us</a></li>

</ul>
          </div>


        
          <div class="col-md-4 col-sm-12" style="height: 240px;">
                <h3 class="text-white">Contact Us </h3>
            <p class="text-justify text-white">
            
            </p>
            

            <span><a href="#"  style="color: white"><i style="color:#D69B25;font-size: 20px; " class=" fa fa-phone"></i> 0988 5621 75</a></span><br><br>

            <span style="color: white"> <i style="color:#D69B25;font-size: 20px; " class=" fab fa-whatsapp"></i> 0997 7373 795</span><br>
            <br>

              <span><a href="#"  style="color: white"><i style="color:#D69B25;font-size: 20px; " class=" fab fa-whatsapp"></i> 0988 4621 335</a></span><br><br>
              

              <span style="color: white"> <i style="color:#D69B25;font-size: 20px; " class=" fa fa-envelope"></i> info@Council.sy</span>
              <br>
              <br>
            
                
          </div>
          

          <div class="col-md-4 col-sm-12">
            <ul class="social1">
              <h3 class="text-white">Follow Us</h3>
      <li><a href="#" style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-facebook"></i> Council</a></li><br>
      <li><a href="#"  style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-twitter"></i> @Council.sy</a></li><br>
      
      <li><a href="#"  style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-instagram"></i> Council</a></li><br>
      
  
    </ul>
          </div>
        
        </div>
      </div>
    </div>
</div>

<div style="height: 40px;background-color:#10305a;padding-top: 6px; ">
  <p class="text-center text-warning">All Right Reserved To Council <i class="fa fa-heart"></i> 2021</p>

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


<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
  $(document).ready( function () {
    $('#xx').DataTable();
} );
</script>

</body>
</html>
