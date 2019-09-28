<?php

class Hamming {

    public $string1;
    public $string2;
    public $distance = 0;

    public function __construct($string1, $string2){
        $this->string1 = $string1;
        $this->string2 = $string2;
    }

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