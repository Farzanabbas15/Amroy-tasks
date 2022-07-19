<?php
//$fptr = fopen("files.php", "r");
//echo var_dump($fptr);
//if (!$fptr) {
//    die("unable to open this file please enter a vaild file name");
//}
//$content = fread($fptr, "filename");
//echo $content;
//fclose($fptr);


//read line by line
/*
$fptr = fopen("file.php", "r");
echo fgets($fptr);
while($a=fgets($fptr)){
    echo $a;
}
*/

//read character by character
/*
$fptr = fopen("file.php", "r");
echo fgets($fptr);
while($a=fgetc($fptr)){
    echo $a;
break;
}
*/

/*write a program which reads the content of a file
 until . has been encountered*/
 /*while ($a = fgetc($fptr)) {
    echo $a;
    if ($a == ".") {
        break;
    }
 }
 fclose($fptr);
 */

 //write and appending to files
 //echo"welsome to file in php";
 //$fptr = fopen("myfiles1.txt", "w");
 //fwrite($fptr, "this is the best files");
 //fwrite($fptr, "this is the best files\n");



 //append to a file in php
 $fptr = fopen("myfiles1.txt", "a");
 fwrite($fptr, "this is being appended to the file \n");
 fclose($fptr);
 
?>