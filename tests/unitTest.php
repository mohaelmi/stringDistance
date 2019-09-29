<?php

use PHPUnit\Framework\TestCase;

require 'classes/hammingClass.php';
require 'classes/levenshteinClass.php';

class HammingAndLevenshteinTest extends TestCase {
    public $str1;
    public $str2;

    public function test_humming_sameLength(){
        $this->str1 = 'my';
        $this->str2 = 'me';
        $hamming = new Hamming($this->str1, $this->str2);
        
        $this->assertEquals(1, $hamming->getDistance());
    }
    public function test_humming_DiffLength(){
        $this->str1 = 'my';
        $this->str2 = 'men';
        $hamming = new Hamming($this->str1, $this->str2);

        $this->expectOutputString("");
    }

    public function test_levenshtein_strLength(){
        $this->str1 = '';
        $this->str2 = 'saturday';
        
           $leven = new levenshtein($this->str1, $this->str2);
        if(strlen($this->str1) == 0){
               $this->assertLessThanOrEqual(strlen($this->str2), $leven->getDistance());
        }
        
        $this->assertIsNumeric($leven->getDistance());
        


    }

}