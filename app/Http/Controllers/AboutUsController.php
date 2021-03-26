<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    
    public function index(){
        
        $style=parent::getStyle();
        
        
        
        return view('aboutus' , ['styleCode' => $style]);
        
    }
    
}
