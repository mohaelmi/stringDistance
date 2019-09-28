<?php

require 'classes/hammingClass.php';
require 'classes/levenshteinClass.php';

class Calc {
    public $str1;
    public $str2;
    public $calc;

    public function __construct($str1, $str2, $calc){
        $this->str1 = $str1;
        $this->str2 = $str2;
        $this->calc = $calc;
    }

    public function callClass(){
        $hamming = new Hamming($this->str1, $this->str2);
        $levenshtein = new Levenshtein($this->str1, $this->str2);
        switch ($this->calc) {
            case 'hamming':
                $result = $hamming->getDistance();
                //$result = 'yes';
                break;
            case 'levenshtein':
                $result = $levenshtein->getDistance();
                break;
            default:
                $result = "error";
                break;
        }
        return $result;
    }
}

?>