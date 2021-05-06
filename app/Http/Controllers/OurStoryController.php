<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurStoryController extends Controller
{
    public function index(){
        
        $style=parent::getStyle();  
        return view('ourstory' , ['styleCode' => $style]);
        
    }
}
