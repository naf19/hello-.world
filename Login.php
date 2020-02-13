<?php
session_start();
include 'connect.php';
if (isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM   customer WHERE   username='$username' && password='$password'";
$exe=mysqli_query($conn,$sql);
$numberofrecords=mysqli_num_rows($exe);
$row=mysqli_fetch_array($exe);
if($numberofrecords>0)
{
	$_SESSION{'username'}=$row['name'];
	$_SESSION["id"]=$row['id'];
	header("location:settings.php");
}else
{
	?>
	<script>alert("Invalid Login Entries");</script>
	<?php
}
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div class="row">
    <form method="post" id="form"
 style="font-family:Quicksand, sans-serif;background-color:rgba(44,40,52,0.73);width:320px;padding:10px;">
        <h1 id="head" style="color:rgb(193,166,83);">Login form</h1>
        <div><img class="rounded img-fluid" src="img/logo.png" id="image" style="width:auto;height:auto;"></div>
        <div class="form-group"><input  type="username" class="form-control" name="username" placeholder="username" required></div>
        <div class="form-group"><input  type="password" class="form-control" name="password" placeholder="Password" required></div>
		 <input type="submit" name="login" value="Submit">

		</form>
</div>
</body>

</html>