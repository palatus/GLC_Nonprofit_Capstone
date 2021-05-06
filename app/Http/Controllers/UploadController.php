<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
    
    public function uploadIcon(Request $request){
        
        $defaultResource = 'icon.png';
        
        $user = Auth::user();
        if($user->level === 0){
            back()->with('styleCode',parent::getStyle())->with('msg','Only verified users may set an account icon.');
        }
        
        // Validation
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg|max:5096'
        ]);
        
        if($request->file('file')) {
            
            
            
            $file = $request->file('file');
            $filename = time().'_'.$user->id.'_icon';
            
            // File upload location
            $location = 'images/user/';
            
            // Upload file
            $file->move($location,$filename);
            
            if($user->iconId !== $defaultResource){
                
                // Delete User icon
                $location = public_path('images/user/');
                File::delete($location.$user->iconId);
                
            }
            
            $user->iconId = $filename;
            $user->save();
            
            
            return back()->with('styleCode',parent::getStyle())->with('msg','Success');
            
        }else{

            return back()->with('styleCode',parent::getStyle())->with('msg','Couldn\t set icon!');
            
        }
        
        return back()->with('styleCode',parent::getStyle())->with('msg','Something went wrong!');
        
    }
    
    public function index(){
        
        // Set page style data
        $style=parent::getStyle();
        
        return view('/',['styleCode'=>$style]);
        
    }
    
}
