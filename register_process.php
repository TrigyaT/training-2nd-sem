<?php
require "database.php";

$fullname=$_POST['full_name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

//empty validation
if(empty($fullname)||empty($email)||empty($username)||empty($password)){
    header("Location:register.php?error=incomplete form");
}


//store at database

$server="localhost"; //default always
$user="root"; //default always
$pass=""; // we did not set any password mysql so that leave empty
$database="trigya"; //your database created using phpmyadmin

//open database connection
$con=mysqli_connect($server,$user,$pass,$database);

//perform the sql query
$sql="insert into users(fullname,email,username,password)values('$fullname','$email','$username','$password')";
mysqli_query($con,$sql);
echo"new record added !";

//close connection
mysqli_close($con);
?>
