<?php
//start the session and get the data
session_start();
if(isset($_SESSION['username'])){
echo "Welcome" . $_SESSION['username'];
echo "<br> your favorite catgory is" . $_SESSION['favCat'];
$_SESSION['favCat'] = "books";
echo "we have saved your seeion";
}
else{
    echo "please login to continue";
}
?>