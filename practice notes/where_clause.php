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

$sql = "SELECT * FROM `contactus` WHERE `name` LIKE 'ashar' ";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo  "Num of rows affected: $aff";
// usage of WHERE clause to fetch data from database
$num =  mysqli_num_rows($result);
echo $num .  " Record found in this databse <br>";

if($num> 0){
     
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['sno'] . $row['name'] . " Welcome to " . $row['email'];
        echo "<br>";
    }
}    
    //usage of where clause to update data
    $sql = "UPDATE `contactus` SET `name` = 'farzan' WHERE `contactus`.`email` = 'email@gmail.com'";
    $result = mysqli_query($conn, $sql);
    if ($result){
        echo "we updated a record sucessfully";
    }   
    else{
        echo "we could not updated a record sucessfully";
     }


?>