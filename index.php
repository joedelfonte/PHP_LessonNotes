<?php

// $arr1 = [1,2,3,4,5];

// $array = [ 
//            'arr1' => ['num1' => 1, 'num2' => 2, 'num3' => 3, 'num4' => 4, 'num5' => 5],
//            'arr2' => [6,7,8,9,10], 
//            'arr3' => [11,12,13,14,15] 
//          ]; //2D array

    // print_r($array);

    // echo '<br>' .'The value is: ' .$array['arr1']['num4'];
        //  foreach($array as $index1 => $array1){
        //         echo $index1 .'<br>';
        //     foreach($array1 as $index2 => $array2){
        //         echo $index2 .'   ' .$array2 ."\t";
        //     }
        //     echo '<br>';
        //  }


///3Dimensional Array

 $array = [ 
            'Array1' => [ 'Arr1' => [ 1,2,3], 'Arr4' => ['a' => 4, 'b' => 5, 'c' => 6], 'Arr5' => [7,8,9] ],
           'Array2' => [ 'Arr2' => [10,11,12],[13,14,15],[16,17,18] ],
            'Array3' => [ 'Arr3' => [19,20,21],[22,23,24],[25,26,27] ] 
          ];  

 echo 'This is the value of array: ' .$array['Array1']['Arr4']['c'];
         
          foreach($array as $index1 => $array1){
                         echo $index1 .'<br>';
                 foreach($array1 as $index2 => $array2){
                         echo $index2 .'<br>';
                     foreach($array2 as $index3 => $array3){
                      
                         echo $index3 .'  ' .$array3 ."\t";
                        
                     }
                         echo '<br>';
                 }
                     echo '<br>';
             }  
      
$arr1 = [ ];
$arr2 = [ [],[] ];
$arr3 = [ [ [ ] ],[ [ ] ],[ [ ] ] ];



//Pass by Value and Pass by Reference
echo 'This is Pass by Value';
echo '<br>';
function passbyValue($param){

    $param += 3;
    echo'This is the value inside of the function: ' .$param .'<br>';
}

$num = 10;
passbyValue($num);

echo 'This is the value outside of the function: ' .$num;
echo '<br>';
echo '<br>';

//Pass by Reference
echo 'This is Pass by Reference';
echo '<br>';
function passbyRef(&$param1){
    $param1 +=3;
    echo'This is the value inside of the function: ' .$param1 .'<br>';
}

$num1 = 10;
passbyRef($num1);
echo 'This is the value outside of the function: ' .$num1;





?>