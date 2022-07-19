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
echo "Connecting was sucessfull";
}

//Create a table in database
$sql = "CREATE TABLE `phpemp` (`sno` INT(3) NOT NULL AUTO_INCREMENT , `name` INT(25) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);
//check for the table creation sucess
if($result){
    echo "the table was created sucessfully";
}
else{
    echo "the table was not created because of this error";
    mysqli_error($conn);
}

?>