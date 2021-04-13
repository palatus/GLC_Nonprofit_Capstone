<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;

class VolunteerController extends Controller
{
    
    public function index(){
        
        // Should get double array of KV pairs from DB for volunteers
        // string for name, string describing person, string for resource location
        $style=parent::getStyle();
        $volunteers = Volunteer::all();
        
        return view('volunteers',['volunteers' => $volunteers,'styleCode' => $style]);
        
    }
    
}
