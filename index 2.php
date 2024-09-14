<?php

/* function array_val($value1, $value2, $value3){
    $array = [$value1, $value2, $value3];
    foreach($array as $arr){
        echo $arr .'<br>';
    }
}
array_val('abcs', 'efgh', 'gggs');

function loop_count($num) {
    for ($i = 100; $i >= 0; $i += $num){
        echo $i % 2 == 0 ? $i .' is even' : $i . 'is odd';
        echo '<br>';
    }
}
loop_count(5);
 */

 
 function array_val($value1){
    foreach($array as $arr){
        echo $arr .'<br>';
    }
    $array = ['s', 'd', 'ss'];
    array_val($array);
}
?>
