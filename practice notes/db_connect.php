<?php
//Connecting to database
$servername= "localhost";
$username= "root";
$password = "";
$database = "contacts";
//Create a connection
$conn = mysqli_connect($servername,$username,$password,$database);
//die function
if (!$conn){
    die("sorry we failed to connect: " . mysqli_connect_error());
}
else{
echo "Connecting was sucessfull <br>";
}
 
?>