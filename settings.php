<?php
session_start();
include("connect.php");
	
if (isset($_POST['submit'])){
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$DOB = $_POST['DOB'];
$updatequery = "update customer set FirstName = '$FirstName', LastName = '$LastName', username = '$username', password = '$password', email = '$email', DOB ='$DOB'";



$exe = mysqli_query($conn,$updatequery);
if($exe)
{


	header("location:login.php");

}
else
{echo mysqli_error($conn);
}
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ecycle</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">

</head>
<body>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/bs-animation.js"></script>
	<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="home.php">E-Cycle</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation" style="background-image:url(&quot;hhhhhh&quot;);"><a class="nav-link text-monospace" href="home.php" style="background-image:url(&quot;assets/img/icons8_Home_32px.png&quot;);width:32px;height:32px;">&nbsp;</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.html" style="background-image:url(&quot;assets/img/icons8_Login_32px_1.png&quot;);width:32px;height:32px;"></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="updating.php" style="background-image:url(&quot;assets/img/icons8_Registration_32px_1.png&quot;);width:32px;height:32px;"></a></li>
                </ul>
        </div>
        </div>
    </nav>
	 <main class="page updating-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">updating</h2>
					<?php
					$firstname=$_SESSION["id"];
					$query= "SELECT * FROM   customer WHERE   id ='$firstname' ";
					$exe=mysqli_query($conn,$query);
					$row=mysqli_fetch_row($exe);
					?>
                </div>
								<form id="login" method="post">

<div class="form-group"><label>First name</label>
   <input type="text" class="form-control" name="FirstName" id="firstname" placeholder="Enter your FirstName" required type= "text" value="<?php echo $row[1] ;?>"autofocus="">
</div>
<div class="form-group"><label>Last name</label>
   <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Enter your Last Name" required type= "text" value="<?php echo $row[2] ;?>">
</div>
<div class="form-group"><label>Username</label>
   <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username" required type= "text" value="<?php echo $row[3] ;?>">
</div>
<div class="form-group"><label>Password</label>
   <input type="Password" class="form-control" id="password" name="password" placeholder="Enter your Password" required type= "text" value="<?php echo $row[4] ;?>">
</div>
<div class="form-group"><label>Email</label>
   <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Enter your Email Address" required type= "text" value="<?php echo $row[5] ;?>">
</div>
<div class="form-group"><label>Date of Birth </label>
   <input type="date" name="DOB" class="form-control" id="DOB" placeholder="Enter your Date of Birth" required type= "text" value="<?php echo $row[6] ;?>">

<input type="submit" name="submit" class="btn btn-primary"></div>
        </section>
    </main>
</body>
</html>