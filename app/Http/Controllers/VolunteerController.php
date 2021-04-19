<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class VolunteerController extends Controller
{
    
    public function index(){
        
        // Should get double array of KV pairs from DB for volunteers
        // string for name, string describing person, string for resource location
        $style=parent::getStyle();
        
        // volunteers should be level 1, so we'll fetch all users of that level
        $volunteers = User::where('level','1')->get();
        
        return view('volunteers',['volunteers' => $volunteers,'styleCode' => $style]);
        
    }
    
}
