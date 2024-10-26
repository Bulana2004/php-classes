<?php

class queve {

var $arr = [];

    function __construct($n){
        $this->arr = [$n];
        // print_r($this->arr);
    }

    function push($val){
        array_push($this->arr , $val);
    }

    function pop(){
        array_pop($this->arr);
    }

    function arrshow(){
        print_r($this->arr);
    }

}

$class = new queve(54);
$class->push(43);
$class->push(52);
// $class->pop();
$class->arrshow();