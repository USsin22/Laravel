<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function Sum(float $a,float $b){
return $a + $b;
    }

        public function Subtract(float $a,float $b){
return $a - $b;
    }



    
}
