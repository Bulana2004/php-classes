<?php

class cylinder{

// Defined the Variable
var $arr = [
    "r" => null,
    "h" => null
];

    function __construct(){
        $this->arr;
    }

    function radius($n){
        $this->arr['r'] = $n;
        // print_r($this->arr);
    }

    function height($n){
        $this->arr['h'] = $n;
        // print_r($this->arr);
    }

    function volume(){
        $r = $this->arr['r'];
        $h = $this->arr['h'];
        $v = number_format(M_PI * $r * $r * $h , 2);
        return $v;
    }

    function waterVolume($n){
        $r = $this->arr['r'];
        $waterHeight = $n;
        
        $waterVolume = number_format(M_PI * $r*$r * $waterHeight , 2);
        return $waterVolume;
    }

}

// $class = new cylinder();
// $class->radius(12);
// $class->height(24);
// echo "Volume is : " . $class->volume();
// $class->waterVolume();