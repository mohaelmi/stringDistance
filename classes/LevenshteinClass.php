<?php

class Levenshtein {
    public $string1;
    public $string2;
    public $matrix = [];

    public function __construct($string1, $string2){
        $this->string1 = $string1;
        $this->string2 = $string2;
    }
    //func that 
    public function getDistance(){
        if(strlen($this->string1) == 0 ){ 
            return strlen($this->string2);
        }
        if(strlen($this->string2) == 0 ){
             return strlen($this->string1);
        }
        //fill first column in each row
        for($i = 0; $i <= strlen($this->string2); $i++){
            $this->matrix[$i] = [$i];
        }
        //fill first row in each column
        for($j = 0; $j <= strlen($this->string1); $j++){
            $this->matrix[0][$j] = $j;
        }

        //fill the matrix by considering three posible things
        //if tow characters are same we copy the diagonal element.
        //otherwise we take minimum of left diagonal and up elements and add one 
        for($i = 1; $i <= strlen($this->string2); $i++){
            for($j = 1; $j <= strlen($this->string1); $j++){
                if($this->string2[$i-1] == $this->string1[$j-1]){
                    $this->matrix[$i][$j] = $this->matrix[$i-1][$j-1]; 
                }else{
                    $this->matrix[$i][$j] = min($this->matrix[$i-1][$j-1] + 1, //substutation 
                                                min($this->matrix[$i][$j-1] + 1, //insertion
                                                    $this->matrix[$i-1][$j] + 1)); // deletion
                    //$this->matrix[$i][$j] = [5][1];
                }
            }
        }
         $result = $this->matrix[strlen($this->string2)][strlen($this->string1)];
         return $result;
    }
}