<?php

class queve {

var $arr = [];

    function __construct($n){
        $this->arr = [$n];
        // print_r($this->arr);
    }

    // Add an element end of the queve
    function push($val){
        array_push($this->arr , $val);
    }

    // Remove the first element from the queve
    function pop(){
        array_pop($this->arr);
    }

    // Check queve is empty 
    function isEmpty(){
        return empty($this->arr);
    }

    // Return the last Element in the queve without removint it
    function top(){
        return $this->isEmpty() ? null : end($this->arr);
    }

    // Return the first Element in the queve without removing it
    function peek(){
        return $this->isEmpty() ? null : $this->arr[0];
    }

    // Return the current numbers in the queve
    function size(){
        return count($this->arr);
    }

    // Clear all elements in the queve
    function clear(){
        $this->arr = [];
    }

}

$class = new queve(54);
$class->push(43);
$class->push(21);
$class->push(71);

$peek = $class->peek();
echo "First element in the queve : " . $peek . "\n";

$top = $class->top();
echo "Last Element in the Queve : " . $top . "\n";

$size = $class->size();
echo "Size of the Queve : " . $size . "\n";

$class->clear();
$size = $class->size();
echo "Size of the Queve after clear it : " . $size . "\n";