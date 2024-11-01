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

}