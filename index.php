<?php
include "connect.php";

//customer table
$sql = "CREATE TABLE if not exists customer (
id INT(6)  AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
password VARCHAR (30) NOT NULL,
email VARCHAR(50) not null ,
DOB date not null,
PostalAddress VARCHAR(20) not null,
PostCode VARCHAR(10) not null

)"; 


$result=mysqli_query($conn, $sql);
if($result)
{
	echo "<p>Customer table created</p>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
//products table
$sql = "CREATE TABLE if not exists products (
productid INT(6)  AUTO_INCREMENT PRIMARY KEY, 
productname VARCHAR(30) NOT NULL,
price double,
quantity int(6),
image VARCHAR(30)
)"; 

$result=mysqli_query($conn, $sql);
if($result)
{
	echo "<p>products table created</p>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

//redirects to login page
header("location:home.php");

//comments table
$sql = "CREATE TABLE if not exists comments (
commentid INT(6)  AUTO_INCREMENT PRIMARY KEY, 
dateposted date,
customerid int(6),
message text
)"; 

$result=mysqli_query($conn, $sql);
if($result)
{
	echo "<p>comments table created</p>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
//buyitem table
$sql = "CREATE TABLE if not exists buyitem (
buyitemid INT(6)  AUTO_INCREMENT PRIMARY KEY, 
customerid int(6),
productid int(6),
quantity int(6),
totalamount double,
buydate date
)"; 

$result=mysqli_query($conn, $sql);
if($result)
{
	echo "<p>transaction table created</p>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
?>
