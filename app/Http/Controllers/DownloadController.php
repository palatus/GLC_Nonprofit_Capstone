<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class DownloadController extends Controller
{
    
    // download the volunteer form || Any user
    public function form(){
        
        $file_path = public_path()."/download/GLC Volunteer Registration Form 2021.pdf";
        return response()->download($file_path);
        
    }
    
    // download an assets file by name || Admin or higher
    public function grab($file_name){
        
        $user = Auth::user();
        if($user->level >= 2){
            
            $file_path = public_path(). "/resources/assets/files/".$file_name;
            return response()->download($file_path);
            
        }
            
    }
    
}
