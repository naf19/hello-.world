<?php
session_start();
include 'connect.php';
$sql="SELECT * FROM products";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - E-cycle</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">E-cycle</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="home.php">shop</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="settings.php">account setting</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="contact.php">contact</a></li>
                    
                </ul>
            </div>
        </div>
		<style>
		
		</style>
		
    </nav>
        

</main>
</section>
</div>
  <footer id="footer" class="section-bg">
  <br><br><br><br><br><br>
         <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    
                    <div class="card-block">
                       <img src="img/1-bike.jpg".jpg" alt="" width="100" height="100">

                        <h4 class="card-title"><?php echo  $row['productname'];?></h4>
                       <h5><?php echo  $row['price'];?> Kshs25000</h5>
                    </div>
                    <div class="card-footer">
					
                        <a href="buyitem.php?id=<?php echo $row[1]; ?>" class="btn btn-success btn-sm">Buy Now</a>
                    </div>
                </div>
            </div>

   <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card card-inverse card-info">
                    
                    <div class="card-block">
                       <img src="img/2-full.jpg".jpg" alt="" width="100" height="100">

                        <h4 class="card-title"><?php echo  $row['productname'];?></h4>
                       <h5><?php echo  $row['price'];?> Kshs87000</h5>
                    </div>
                    <div class="card-footer">
					
                        <a href="buyitem.php?id=<?php echo $row[1]; ?>" class="btn btn-success btn-sm">Buy Now</a>
                    </div>
                </div>
            </div>
			  </br></br></br></br></br></br>
			<div class="row">
  <div class="column"> </div>
  <div class="column"></div>
</div>
			
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
