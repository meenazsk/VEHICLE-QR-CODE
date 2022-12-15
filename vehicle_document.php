<?php
include('dbconnect.php');
if(isset($_POST['submit']))
{
    $v1=$_POST['f1'];
    $v2=$_POST['f2'];
    $v3=$_POST['f3'];
    $v4=$_POST['f4'];
    $v5=$_POST['f5'];
    $v6=$_POST['f6'];
    $v7=$_POST['f7'];
    $v8=$_POST['f8'];
    $v9=$_POST['f9'];
    $v10=$_POST['f10'];
    
    $sql=mysqli_query($conn,"INSERT INTO vehicle_document VALUES('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10')");
    if($sql)
    {
        echo "data inserted";
    }
    else
    {
        echo "data is failed";
        
    }
}
?>









<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arsha Bootstrap Template - Index</title>
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

      <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="driving_licence.php">Driving licence</a></li>
          <li><a class="nav-link scrollto" href="Insurance.php">Insurance</a></li>
          <li><a class="nav-link   scrollto" href="Emission_testing.php">Emission testing</a></li>
          <li><a class="nav-link scrollto" href="Missing_vehicle.php">Missing testing</a></li>
          
          <li><a class="nav-link scrollto" href="vehicle_document.php">vehicle_document details</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Business</h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

<!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="detail-box">
        <div class="heading_container heading_center">
          <h2>
            Signup  page
          </h2>
        </div>
        <p>
         
        </p>
      </div>
      
    <center>
		<form method="post"><br>
			<h3><label>Driving Licence</label><br><br></h3>
			<label>VehicleNumber:</label><br>
			<input type="text" name="f1"><br><br>
			<label>VehicleName:</label><br>
			<input type="text" name="f2"><br><br>
			<label>VehicleType:</label><br>
			<input type="text" name="f3"><br><br>
			<label>Username:</label><br>
			<input type="text" name="f4"><br><br>
		
			<label>City:</label><br>
			<input type="text" name="f5"><br><br>
			<label>Address:</label><br>
			<input type="text" name="f6"><br><br>
			<label>Fueltype:</label><br>
			<input type="text" name="f7"><br><br>
			<label>model:</label><br>
			<input type="text" name="f8"><br><br>
			<label>Manufacturedate:</label><br>
			<input type="text" name="f9"><br><br>
			<label>Chesisnumber:</label><br>
			<input type="text" name="f10"><br><br>
			
			
			
			<input type="submit" name="submit" value="submit"><br><br>
		</form>
	</center>


</center>
       
      </div>
    </div>
  </section>

  <!-- end about section -->

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