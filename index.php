<?php

include('dbconnect.php');
 
 
 if(isset($_POST['submit']))
 {
     
    $v1=$_POST["f1"];
    $v2=$_POST["f2"];
    
    $v1=stripcslashes($v1);
    $v2=stripcslashes($v2);
    
    $v1=mysqli_real_escape_string($conn,$v1);
     $v2=mysqli_real_escape_string($conn,$v2);
     
     $sql="SELECT * FROM admin WHERE adminmno='$v1' AND adminpassword='$v2'";
     $result=mysqli_query($conn,$sql);
     $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
     $count=mysqli_num_rows($result);
     
     
     if($count==1)
     
     {
       echo "<h1><center>Login successful </center></h1>";
       
       echo"<script>window.open('Home_page.php','_self')</script>";

     }
     else
     {
         echo "<h1>Login failed.Invalid mobile number or password</h1>";
     }
     
     
 }
 
 
?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>QR Vehicle Verification For RTO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.9.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">VEHICLE DOCUMENT VERIFICATION</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Verify Your Vehicle Registration</h1>
          <h2>Now you can check ant Vehicle's information like Owner Name,Vehicle Type,Model and relevant detail Just by entering the Vehicle's registration number.</h2>
        
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->




   <!-- ======= Admin login Section ======= -->
    <center>
    <section id="login" class="login">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Admin login</h2>
        </div>
        <form method="POST">
     

      <h5><label>Mobile Number:</label><br></h5>    
      
      <input type="text"  name="f1" maxlength="10" pattern="[6789][0-9]{9}"><br><br>
      <h5><label>Password:</label><br></h5>

      <input type="Password" name="f2"><br><br>
      <input type="submit" name="submit" value="login"/><br><br>
      
      

    


    </form>

</center>

    </section><!-- End Admin login Section -->  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>