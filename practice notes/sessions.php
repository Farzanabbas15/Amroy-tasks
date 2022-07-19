<?php
//What is a session?
//Used to manage information cross difference pages

//verify the user login info
session_start();
$_SESSION['username'] = "farzan";
$_SESSION['favCat'] = "books";
echo "we have saved your seeion";

?>