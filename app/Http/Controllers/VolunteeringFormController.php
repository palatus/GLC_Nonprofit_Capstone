<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class VolunteeringFormController extends Controller
{
    
    public function syncForm($filename,$location){
        
        $user = Auth::user();
        
        $oldForm = $user->formId;
        
        if($oldForm != null && strlen($oldForm)>0){
            
            error_log('-> '.$location.$oldForm);
            File::delete($location.$oldForm);
            
        }
        
        $user->formId = $filename;
        $user->save();
        
    }
    
    public function processRequest(Request $request){
        
        $user = Auth::user();
        if($user->level != 0){
            return redirect('/home')->with(['styleCode'=>parent::getStyle()])->with('msg', 'You have already been verified!');
        }
        
        $request->validate([
            'file' => 'required|mimes:docx,pdf|max:5000'
        ]);
        
        if($request->file('file')) {
            
            $uuid = uniqid();
            $file = $request->file('file');
            $extension = $file->extension();
            
            
            $filename = time().'_'.$uuid.'.'.$extension;
            
            // File upload location
            $location = public_path('resources/assets/files/');
            
            // Upload file
            $file->move($location,$filename);
            error_log('Created: '.$location.$filename.$extension);
            
            // link file to volunteer 
            $this->syncForm($filename,$location);
            return redirect('/home')->with(['styleCode'=>parent::getStyle(),'msg'=>'Success! Please await an administrator\'s approval.']);
            
            
        }else{

            error_log('volunteer form fail');
            
        }

        return redirect('/home')->with(['styleCode'=>parent::getStyle()]);
        
    }
    
   
    
    
    public function index(){
        
        // Set page style data
        $style=parent::getStyle();
        
        // Volunteer level users may still view this page, but let's pass a boolean to disable certain features.
        if(Auth::user()-> level > 0){
            return view('volunteer',['verified' => true,'styleCode' => $style]);
        }
        
        return view('volunteer',['verified' => false,'styleCode' => $style]);
        
    }
    
}
