<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class VolunteerController extends Controller
{
    
    public function index(){
        
        // string for name, string describing person, string for resource location
        $style=parent::getStyle();

        $volunteers = User::where('level','1')->get();
        $facilitators = User::where('level','>','1')->get();
        
        return view('volunteers',['volunteers' => $volunteers,'facilitators'=>$facilitators,'styleCode' => $style]);
        
    }
    
}
