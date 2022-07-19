<?php
function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;

    }
    return $sum;
}

$rohan = [32,62 ,12 ,98,74];
$sumMarks = processMarks($rohan);

$farzan = [37,98,95,93,84];
$sumMarksfarzan = processMarks($farzan);

echo "total marks score by farzan out of 600 is $sumMarksfarzan <br>";
echo "total marks score by rohan out of 600 is $sumMarks <br>";

function myfun($thisArr){
    $sum = 0;
    foreach ($thisArr as $value) { 
        $sum += $value;

    }
    return $sum;
}
$ahmed = [32,62 ,12 ,98,74];
$sumMarksahmed = processMarks($ahmed);

$saboor = [37,98,95,93,84];
$sumMarkssaboor = processMarks($saboor);

echo "total marks score by ahmed out of 600 is $sumMarksahmed <br>";
echo "total marks score by saboor out of 600 is $sumMarkssaboor";


?>