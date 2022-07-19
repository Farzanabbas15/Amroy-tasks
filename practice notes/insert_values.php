<?php
//Connecting to database
$servername= "localhost";
$username= "root";
$password = "";
$database = "dbfarzan";


//Create a connection
$conn = mysqli_connect($servername,$username,$password,$database);
//die function
if (!$conn){
    die("sorry we failed to connect: " . mysqli_connect_error());
}
else{
echo "Connecting was sucessfull <br>";
}
//variable to be inserted in to the table
$name = "umer";
$city = "khi";
//sql query to be executed
$sql = "INSERT INTO `emp` (`name`, `city`) VALUES ('$name', '$city')";

$result = mysqli_query($conn, $sql);
//add a new data in table

if($result){
    echo "record has been insrted sucessfully <br>";
}
else{
    echo "record was not be insrted because of this error";
    mysqli_error($conn);
}

?>