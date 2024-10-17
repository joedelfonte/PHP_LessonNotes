<?php

class Vehicle{

    //member variable
    public $brand;
    public $color;

    function __construct($brand, $color){
        $this->brand = $brand;
        $this->color = $color;
    }

    function DisplayClass(){
        echo 'This Brand is: '.$this->brand ."<br>";
        echo 'This color is: ' .$this->color;
    }
}
 
$mycar = new Vehicle('Cat', 'White');
$mycar-> DisplayClass();


class Car extends Vehicle{
    public $yearmodel;

    function __construct($brand, $color, $yearmodel){
        parent::__construct($brand, $color);
        $this->yearmodel = $yearmodel;
    }

    function show(){

    }
} 



?>