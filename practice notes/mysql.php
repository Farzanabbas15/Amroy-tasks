<?php
echo "welcome to my database";
echo "<br>";
/* ways to connect mysql database
1. MySQLi extension
2. PDO
*/
//Connecting to database
$servername= "localhost";
$username= "root";
$password = "";
//Create a connection
$conn = mysqli_connect($servername,$username,$password);
if (!$conn){
    die("sorry we failed to connect: " . mysqli_connect_error());
}
else{
echo "Connecting was sucessfull";
}
?>