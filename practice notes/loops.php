<?php
//$i =1;
/*while($i<5){
    echo $i+1;
    echo "<br>";
    $i++;
    
}
for ($i=1 ; $i < 10; $i++) { 
    echo("The number is $i <br>");
}


do {
    echo("$i <br>");
    $i++;
} while ($i < 5);
*/
$arr = array("bananas" , "apple" ," mango ", "harpic");

//for ($i=0; $i < count($arr); $i++) { 
 //   echo "$arr[$i]";
   // echo "<br>";}

foreach ($arr as $value) {
    echo "$value <br>";
}

?>