<?php
//Lab Exam 10/5/24

//1. 2d Arrays

$studenGrades = [
   "Joan" => ["Scores" => 95.1, 90, 91],
   "Miguel" => ["Scores" => 89, 90, 85],
   "Roice" => ["Scores" => 81, 88, 80]
];

function avgCalculation($candidate){
    $index = array_keys($candidate);
    
    for ($i = 0;$i < count($candidate); $i++){
        $key = $index[$i];
        $result = array_sum($candidate[$key]) / count($candidate);


        echo $key .' = ' .$result;
        echo "<br>";    
    } 
}
avgCalculation($studenGrades);
echo "<br>";

//2. Pass by Value

$numValues = 9;
function passValue($val){
    echo 'Result: ' .$val * 2 ."<br>"; 
}

passValue($numValues);
echo 'Integer: ' .$numValues ."<br><br>";

//3. Pass by reference

$originalArray = [10, 30, 100, 50];
function passbyref(&$values){
    $total = count($values) + 1;
    $values[$total] = 33; 
};
echo 'Original Array: ';
foreach($originalArray as $i){
    echo $i .' ';
}
echo "<br>";
passbyref($originalArray);
echo 'New Array: ';
foreach($originalArray as $i){
    echo $i .' ';
}
echo "<br><br>";

//4. 3d Array
$bookCollections = [
    "Book_1" => [
        "Title" => ["t1" => 'Diary of my Cat'],
        "Author" =>["a1" => 'Cat Owner'],
        "Genre" =>["g1" => 'Urban', "g2" => 'Sci-fi']
    ],
    "Book_2" => [
        "Title" => ["Title2" => 'Haunted House'],
        "Author" => ["Author2" => 'Roice'],
        "Genre" => ["Genre2" => 'Horror']
    ],
];

function edit(&$selectedCollection, $addstr){
    //add genre for book1
    $selectedCollection["Book_2"]["Genre"][0] = 'G3' => 'Sci-fis';
    $selectedCollection["Book_1"]["Genre"][0] = 'G3' => 'Sci-fis'; 
}

function display($selectedCollection){ 
    foreach($selectedCollection as $titles => $info){
        echo $titles ."<br>";
        foreach($info as $details => $values){
            echo $details .' = ';
            foreach($values as $innerkey => $innerValue){
                echo $innerValue .', ';
            }
            echo "<br>";
        }
        echo "<br>";
    }

};
echo 'Original-----------------' ."<br>";
display($bookCollections);
edit($bookCollections, 'adds');
echo 'Modified------------------' ."<br>";
display($bookCollections);

?>