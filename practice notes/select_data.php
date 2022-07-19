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

$sql = "SELECT * FROM `contactus`";
$result = mysqli_query($conn, $sql);


//find the numbers of records returned
$num =  mysqli_num_rows($result);
echo $num;
echo " Record found in this databse <br>";

//display the rows returned by the sql query
if($num> 0){
    //$row = mysqli_fetch_assoc($result);
    //echo var_dump($row);
    //echo "<br>";

    //we can fetch in a better way using te loop 
    while($row = mysqli_fetch_assoc($result)) {
        //echo var_dump($row);
        echo $row['sno'] . " Hello" . $row['name'] . " Welcome to " . $row['email'];
        echo "<br>";
    }
    
}
?>