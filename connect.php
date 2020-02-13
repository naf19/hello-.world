<?php
//connection
$host = "localhost";
$username = "root";
$password = "";
$database="ecycleDB";
// Create the connection of the site
$conn = mysqli_connect($host, $username, $password);

// look in the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else
{
	//echo "made successfully";
}
// Create database
$sql = "CREATE DATABASE if not exists ecycleDB";
$Result=mysqli_query($conn, $sql);

if ($Result) {
    //echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_select_db($conn,$database)

	

?>