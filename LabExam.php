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
};
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
        "Title" => ["TL1" => 'Diary of my Cat'],
        "Author" =>["AT1" => 'Cat Owner'],
        "Genre" =>["GN1" => 'Urban', "GN2" => 'Sci-fi']
    ],
    "Book_2" => [
        "Title" => ["TL" => 'Haunted House'],
        "Author" => ["AT1" => 'Roice'],
        "Genre" => ["GN1" => 'Horror', "GN2" => 'Fiction']
    ],
];

function edit(&$selectedCollection, $addGenreBook1, $authorBook1, $addGenreBook2, $authorBook2){
    //add genre for book-1
    $tempKeys = array_keys($selectedCollection["Book_1"]["Genre"]);
    $getindexlastkey = $tempKeys[count($tempKeys) - 1];
    //echo $getindexlastkey;

    //note sir, this line secure that it will add the new value to array, even the index is any type/value....
    if ($getindexlastkey === 0 && $getindexlastkey >= 0 ) {//check if the last array index is numerical
        $selectedCollection["Book_1"]["Genre"][$getindexlastkey + 1] = $addGenreBook1;//add value   
    } else {$selectedCollection["Book_1"]["Genre"][0] = $addGenreBook1;};
     
    //add author for Book-1
    $tempKeys = array_keys($selectedCollection["Book_1"]["Author"]);
    $getindexlastkey = $tempKeys[count($tempKeys) - 1];

    //secure to add the new value to last
    if ($getindexlastkey === 0 && $getindexlastkey >= 0 ) {//if the last array index is numerical
        $selectedCollection["Book_1"]["Author"][$getindexlastkey + 1] = $authorBook1;//add value   
    } else {$selectedCollection["Book_1"]["Author"][0] = $authorBook1;};
     
    //add genre for Book-2
    $tempKeys = array_keys($selectedCollection["Book_2"]["Genre"]);
    $getindexlastkey = $tempKeys[count($tempKeys) - 1];
    //echo $getindexlastkey;

    //secure to add the new value to last
    if ($getindexlastkey === 0 && $getindexlastkey >= 0 ) {//if the last array index is numerical
        $selectedCollection["Book_2"]["Genre"][$getindexlastkey + 1] = $addGenreBook2;//add value   
    } else {$selectedCollection["Book_2"]["Genre"][0] = $addGenreBook2;};
     
     //add author for Book-2
    $tempKeys = array_keys($selectedCollection["Book_1"]["Author"]);
    $getindexlastkey = $tempKeys[count($tempKeys) - 1];

    //secure to add the new value to last
    if ($getindexlastkey === 0 && $getindexlastkey >= 0 ) {//if the last array index is numerical
        $selectedCollection["Book_2"]["Author"][$getindexlastkey + 1] = $authorBook2;//add value   
    } else {$selectedCollection["Book_2"]["Author"][0] = $authorBook2;};
     
};

function displayCollection($selectedCollection){ 
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
displayCollection($bookCollections);
edit($bookCollections, 'Fantasy', 'Whisper', 'Magical Realism', 'Ghost');
echo 'Modified------------------' ."<br>";
displayCollection($bookCollections);

?>