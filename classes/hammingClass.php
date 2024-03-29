<?php

class Hamming {
    //attributes
    private $string1;
    private $string2;
    public $distance = 0;
    //the constructor accept two arguments
    public function __construct($string1, $string2){
        $this->string1 = $string1;
        $this->string2 = $string2;
    }
    //func that check different between strings and increase distance if there is mismatch
    public function getDistance(){
        if( strlen($this->string1) != strlen($this->string2)){
            echo "not same length";
            return;
        }
        for($i = 0; $i < strlen($this->string2); $i++){
            if($this->string1[$i] != $this->string2[$i]){
                $this->distance += 1;
            }
        }
        return $this->distance;
    }
}