<?php   

$array1 = [[22, 33, 44], [55, 66, 77]];

for ($i = 0; $i < count($array1); $i++){
    echo $i ."<br>";
    for ($j = 0; $j < count($array1[$i]); $j++){
        echo $j ."\t";
        echo $array1[$i][$j] ."<br>";
        
    }
    echo "<br>";
}

?>
