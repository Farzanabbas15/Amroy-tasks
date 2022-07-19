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
//die function
if (!$conn){
    die("sorry we failed to connect: " . mysqli_connect_error());
}
else{
echo "Connecting was sucessfull";
}

//Create db
$sql = "CREATE DATABASE dbfarzan";
$result = mysqli_query($conn, $sql);
//check for the database creation sucess
if(!$result){
    echo "the bd was created sucessfully";
}
else{
    echo "the db was ot created because of this error";
    mysqli_error($conn);
}

?>