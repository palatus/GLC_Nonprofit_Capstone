<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index(){
        
        // Set page style data
        $style=parent::getStyle();
        
        return view('contact',['styleCode' => $style]);
        
    }
    
}
