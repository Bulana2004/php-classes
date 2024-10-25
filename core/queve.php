<?php

class queve {

var $arr = [];

    function __construct($n){
        $this->arr = [$n];
        // print_r($this->arr);
    }

    function push($val){
        array_push($this->arr , $val);
        print_r($this->arr);
    }

    function pop($val){
        array_pop($this->arr);
    }

}

$class = new queve(54);
$class->push(43);