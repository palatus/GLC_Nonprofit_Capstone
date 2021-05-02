<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    public function index(){
        
        // Set page style data
        $style=parent::getStyle();
        
        $keys=['now'=>date("d-m-Y H:i:s")];
        
        return view('welcome',['styleCode' => $style,'keys' => $keys]);
        
    }
    
}
