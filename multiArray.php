<?php   

$array1 = ['aa' => [22, 33, 44], [55, 66, 77]];
$Keys = [array_keys($array1)];
var_dump($Keys);

for ($i = 0; $i < count($array1); $i++){
    echo $i ."<br>";
    for ($j = 0; $j < count($array1[$i]); $j++){
        echo $j ."\t";
        echo $array1[$i][$j] ."<br>";
        
    }
    echo "<br>";
}

/* $array = [
    'Array1' => [
        'Arr1' => ['a' => 1, 'b' => 2, 'c' => 3],
        'Arr2' => ['d' => 4, 'e' => 5, 'f' => 6],
        'Arr3' => ['g' => 7, 'h' => 8, 'i' => 9]
    ],
    'Array2' => [
        'Arr4' => ['j' => 10, 'k' => 11, 'l' => 12],
        'Arr5' => ['m' => 13, 'n' => 14, 'o' => 15],
        'Arr6' => ['p' => 16, 'q' => 17, 'r' => 18]
    ],
    'Array3' => [
        'Arr7' => ['s' => 19, 't' => 20, 'u' => 21],
        'Arr8' => ['v' => 22, 'w' => 23, 'x' => 24],
        'Arr9' => ['y' => 25, 'z' => 26, 'aa' => 27]
    ]
];

$outerKeys = array_keys($array);

for ($i = 0; $i < count($outerKeys); $i++) {
    $outerKey = $outerKeys[$i];
    $innerArray = $array[$outerKey];
    $innerKeys = array_keys($innerArray);

    for ($j = 0; $j < count($innerKeys); $j++) {
        $innerKey = $innerKeys[$j];
        $innermostArray = $innerArray[$innerKey];
        $innermostKeys = array_keys($innermostArray);

        for ($k = 0; $k < count($innermostKeys); $k++) {
            $innermostKey = $innermostKeys[$k];
            echo  $outerKey .'<br>' .$innerKey .'<br>' .$innermostKey .'  ' .$innermostArray[$innermostKey] . "\t";
        }
        echo '<br>';
    }
    echo '<br>';
}
 */
//mine 3darray

$multiD = [
    'Table1' => [
        'Name' => ['Whisper', 'Steve', 'Robin'],
        'Age' => [12, 30, 20],
        'Gender' => ['C', 'M', 'F']
    ],
    'Table2' => [
        'Department' => ['Dep1', 'SC1', 'ADS3'],
        'DepartmentID' => [001, 056, 900,],
        'Status' => ['N/A', 'Finished', 'INC']
    ],
    'Table3' => [
            'dap4' => ['a' => '1', 'b' => '2','c' => '3'],
            'dap3' => ['aaaa' => 'arts', 'bb' => 'datas','ll' => 'ha'],
            'dap1' => ['kkk' => 'eyys', 'plp' => 'b','asas' => 'c']
        
    ],
];

echo 'values =' .$multiD['Table3']['DATAS']['dap4']['a'];

echo "<br>";

foreach($multiD as $tablekeys => $tableName){
    echo $tablekeys ."<br>";//table3
    echo ' ';
    
    foreach($tableName as $innerTableKeys => $innerTableValues){
        echo $innerTableKeys ." =";//name
        foreach($innerTableValues as $keys => $values){
            echo ' ' .$values .",\t";//whisper
           

        }
        echo "<br>";
    }
    echo "<br>";
}

?>
