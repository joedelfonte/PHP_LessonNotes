<!DOCTYPE html>
<HTML>
<head>
    <title>LAB PRACTICE</title>
</head>
<body></body>

</HTML>

<?php

$name = "World";
$age = 11;
$money = 1.5;

#var_dump($name);

echo 'Hello '. $name .' at age of ' .$age;
echo "<br>";

echo 1 + 1;
echo "<br>";

echo 10/3 + 1 * 100;
echo "<br>";

define('enter', '<br>');
echo enter;
echo "<br>";

echo "array//";
$array1 = ['what' => 'apple', 'banana', 'cat'];
echo "<br>";
echo $array1[0];
echo enter;

var_dump($array1);

echo enter;


if ($age !== '10')
    echo ' 1st Allowed';
else {
    echo 'not allowed';
};
echo enter;

#ternary operator
echo $age == (11) ? 'Allowed' : 'Not Allowed';

#function
echo enter;

function myfunction($msgnow){
    return 'Welcome ' .$msgnow;
};

echo myfunction('world');


function myfunctions ($age) {
    return $age >= 18 ? "Allowed" : "Not Allowed"; 
};
echo enter;
echo myfunctions(19);
?>