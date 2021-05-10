<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Event;
use App\User;

class DevController extends Controller
{
    
    public function isValidated(){
        
        $validated = (Auth::check() && Auth::user() != null && Auth::user()-> level >= 2);
        if($validated){
            return($validated);
        } else {
            return view('welcome');
        }
    }
    
    /*  Removes a user's form file, and unlinks the id from the user table
     *
     */
    public function denyUserForm($id){
        
        $user = User::find($id);
        $thisUser = Auth::user();
        if($thisUser == null || $thisUser->level < 2){
            return back();
        }
        
        $style = parent::getStyle();
        
        if($user != null){
            
            if($user->level > Auth::user()-> level){
                return redirect('/dev')->with('error','The user of id ('.$id.') is of a higher privilege level!')->with('styleCode',$style);
            } else {
                
                if($user->formId != ''){
                    
                    // Delete User Form & update form link 
                    $location = public_path('resources/assets/files/');
                    File::delete($location.$user->formId);
                    $user->formId = '';
                    $user->save();
                    // Submit ticket to user about this issue
                    
                    return redirect()->back()->with('mssg', 'The user was denied successfully')->with('styleCode', $style);
                    
                } else {
                    
                    return redirect('/dev')->with('error','That user hasn\'t submitted a form yet!')->with('styleCode',$style);
                    
                }
                
                
            }
            
        } else {
            return redirect('/dev')->with('error','The user of id ('.$id.') could not be found!')->with('styleCode', $style);
        }
    }

    /*  Elevates a user to volunteer if elegible
     *
     */
    public function acceptUserForm($id)
    {
        $user = User::find($id);
        $style = parent::getStyle();
        
        $thisUser = Auth::user();
        if($thisUser == null || $thisUser->level < 2){
            return back();
        }
        
        if($user->level >= 1){
            if($user->level > 1){
                return redirect('/dev')->with('error', 'This user is not allowed to become a volunteer!')->with('styleCode', $style);
            } else {
                return redirect('/dev')->with('error', 'This user has already been verified!')->with('styleCode', $style);
            }
        }
        if ($user != null) {

            if ($user->formId != '') {

                // Elevate user to level 1   
                $user->level = 1;
                $user->save();
                // Submit ticket about success
                
                
                return redirect('/dev')->with('mssg', $user->name.' is now a volunteer level user!')->with('styleCode', $style);
                
            } else {

                return redirect('/dev')->with('error', 'That user hasn\'t submitted a form yet!')->with('styleCode', $style);
            }
        } else {
            return redirect('/dev')->with('error','The user of id ('.$id.') could not be found!')->with('styleCode',$style);
        }
        
    }
    
    /*  Creates an account if given post data is well formed
     *  
     */
    public function createAccount($accountData){
     
        $thisUser = Auth::user();
        if($thisUser == null || $thisUser->level < 2){
            return back();
        }
        $style=parent::getStyle();
        
        if(User::where('email','like','%'.$accountData[1].'%') -> first() != null){
            return redirect('/dev')->with('error','This email is taken!')->with('styleCode' ,$style);
        }
       
        if($accountData[3] >= Auth::user()->level){
            return redirect('/dev')->with('error','You may only create an account with a lower permissions level than your own')->with('styleCode' ,$style);
        }
        
        if($accountData[2] == null || $accountData[1] == null || $accountData[0] == null){
            return -1;
        }
        
        $user = new User();
        $user->name = $accountData[0];
        $user->email = $accountData[1];
        $user->password = bcrypt($accountData[2]);
        $user->level = $accountData[3];
        
        $user->save();
        error_log("Success: ".$accountData[0]."'s account was created!");
        
    }
    
    /*  Creates an event if given post data is well formed
     *
     */
    public function createEvent($eventData){


        
        $thisUser = Auth::user();
        if($thisUser == null || $thisUser->level < 2){
            return back();
        }

        if($eventData[2] == null || $eventData[3] == null){
            return -1;
        }
        if($eventData[0] == null){
            return -2;
        }
        if($eventData[6] == null){
            return -3;
        }
        
        $event = new Event();
        $event->name = $eventData[0];
        $event->description = $eventData[1];
        $event->eventBegin = $eventData[2].' '.$eventData[3];
        $event->eventEnd = $eventData[4].' '.$eventData[5];
        $event->maxVolunteers = $eventData[6];
        
        $file = $eventData[7];
        $filename = time().'_'.'_icon';
        $event->titleImageId = $filename;
        
        // File upload location
        $location = 'images/events/';
        
        // Upload file
        $file->move($location,$filename);
        
        $event->save();
        error_log("Success: ".$eventData[0]." created!");
        
    }
    
    /*  Switches between post actions for form data consolidation
     *
     */
    public function devAction(){
        
        if($this->isValidated()){
            
            $style=parent::getStyle();
            $type = request('type');
            
            if(!is_numeric($type)){
                return redirect('/dev')->with('error','Action id not specified')->with('styleCode' ,$style);
            }
            switch ($type) {
                
                case 0:
                    $result = $this->createEvent([request('ename'),request('desc'),request('event-start'),request('start-time'),request('event-end'),request('end-time'),request('maxVolunteers'),request('file')]);
                    if($result == -1){
                        return redirect('/dev')->with('error','Date Input Incorrect')->with('styleCode' ,$style);
                    }
                    if($result == -2){
                        return redirect('/dev')->with('error','Name cannot be null')->with('styleCode' ,$style);
                    }
                    if($result == -3){
                        return redirect('/dev')->with('error','Volunteer limit cannot be null')->with('styleCode' ,$style);
                    }
                   break;
                   
                case 1:
                    $result = $this->createAccount([request('name'),request('email'),request('password'),request('level')]);
                    if(is_numeric($result) && $result == -1){
                        return redirect('/dev')->with('error','Found Null Account Info')->with('styleCode' ,$style);
                    }
                    break;
                    
                default:
                    return redirect('/dev')->with('error','Action id invalid')->with('styleCode' ,$style);
                
            }
            
            if(!session('error')){
                
                return back()->with('mssg','Success');
            
            } else {
                
                return back();
                
            }
        }
        
    }
    
    public function index(){
        
        if($this->isValidated()){
                
            // Set page style data
            $style=parent::getStyle();
            
            // build and return array containing users with pending volunteer forms
            // defined as a user of level 0 with a submitted form file
            $users = User::where('formId', '!=', '')->where('level',0)->get();
            
            return view('dev',['styleCode' => $style,'users'=>$users]);
            
        }
        
    }
    
}
