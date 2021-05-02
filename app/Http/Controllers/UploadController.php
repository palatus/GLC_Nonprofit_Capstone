<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    
    public function upload(Request $request){
        
        // Validation
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
        ]);
        
        if($request->file('file')) {
            $file = $request->file('file');
            $filename = time().'_'.$file->getClientOriginalName();
            
            // File upload location
            $location = 'files';
            
            // Upload file
            $file->move($location,$filename);
            
            Session::flash('message','Upload Successfully.');
            Session::flash('alert-class', 'alert-success');
        }else{
            Session::flash('message','File not uploaded.');
            Session::flash('alert-class', 'alert-danger');
        }
        
        return redirect('/',['styleCode'=>parent::getStyle()]);
        
    }
    
    public function index(){
        
        // Set page style data
        $style=parent::getStyle();
        
        return view('/',['styleCode'=>$style]);
        
    }
    
}
