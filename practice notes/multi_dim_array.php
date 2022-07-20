<?php

echo "welcome to multi_dimensional arrays <br>";

//creating a two dimensional array
/*$multiDim = array(
                    array(3,6,9),
                    array(3,6,7),
                    array(3,6,8));
                    */
$multiDim = array(array(array(3,2,9),
                        array(8,6,7),
                        array(0,6,8)));

//echo var_dump($multiDim);
//echo $multiDim[1][2];

//printing the contect of a two dimensional array
//for ($i=0; $i < count($multiDim); $i++) { 
    //echo var_dump($multiDim[$i]);
         //}

//printing two dimensional array
         /*
for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        echo ($multiDim[$i][$j]);
        echo " ";
    }
    
    echo "<br>";
}
*/

// printing three dimentional array
for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        for ($k=0; $k < count($multiDim[$i][$j]); $k++) { 
            echo ($multiDim[$i][$j][$k]);
            echo " ";

        }
        echo "<br>";

    }
    
}

?>