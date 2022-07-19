<?php

//include 'db_connect.php';
require 'db_connect.php';

$sql = "SELECT * FROM `contactus`";
$result = mysqli_query($conn, $sql);


//find the numbers of records returned
$num =  mysqli_num_rows($result);
echo $num;
echo " Record found in this databse <br>";


?>