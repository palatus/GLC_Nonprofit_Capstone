<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Event;
use App\Volunteer;

class EventsController extends Controller
{
    
    public function create(){
        
    }
    public function store(Request $request){
        
    }
    public function show($id){
        
    }
    public function edit($id){
        
    }
    public function update(Request $request, $id){
        
    }
    public function destroy($id){
        
    }
     public function signUpUser($id){
        
        $event = Event::find($id);
        if($event == null){
            return back()->with(['styleCode'=>parent::getStyle(),'msg'=>'There was an issue registering for this event!']);
        }
        
        $user = Auth::user();
        $eventLimit = $event->maxVolunteers;
        $eventVolunteers = Volunteer::where('eventId',$id)->get();
        
        $userCheck = Volunteer::where('eventId',$id)->where('userId',$user->id)->get();
        if($userCheck != null || count($userCheck) > 0){
            return back()->with(['styleCode'=>parent::getStyle(),'msg'=>'You have already signed up for this event!']);
        }
        
        if($eventLimit <= count($eventVolunteers)){
            return back()->with(['styleCode'=>parent::getStyle(),'msg'=>'This event is full!']);
        }
        
        if($user->level >= 1){

            $volunteer = new Volunteer();
            $volunteer->userId = $user->id;
            $volunteer->eventId = $id;
            $volunteer->save();
            
            return back()->with(['styleCode'=>parent::getStyle(),'msg'=>'You\'ve been registered for the event!']);
            
        } else {

            return redirect('/home')->with(['styleCode'=>parent::getStyle(),'msg'=>'Only volunteer level accounts can sign up for an event!']);
            
        }
        
    }
    
    public function index(){

        // Set page style data
        $style=parent::getStyle();
        
        // Get all events from the database
        $events = Event::all();
               
        // Lets split up the events by date
        $closed=[];
        $soon=[];
        $happening=[];
        $planned=[];

        // Let's use keys to save important small data for ease of access
        $keys=['now'=>date("Y-m-d H:i:s")];
        $now = strtotime($keys['now']);
        
        // How many days until an event is considered as "planned" instead of "open"
        $relevanceCutoff = 30;
        
        // Fill the events
        // For each event, evaluate its logical time group
        foreach ($events as $event) {
            
            $begin = strtotime($event['eventBegin']);
            $end = strtotime($event['eventEnd']);
            
            $event['date'] = date("F", $begin).' '.explode("-",explode(" ",$event['eventBegin'])[0])[2];
            
            $time = date("h.i A", $begin);
            $time2 = date("h.i A", $end);
            
            $event['time'] = $time;
            $event['time2'] = $time2;
            $event['year'] = explode("-",explode(" ",$event['eventBegin'])[0])[0];
            
            $volunteers = Volunteer::where('eventId',$event->id)->get();
            $event['regstered'] = count($volunteers);
            
            
            $end = strtotime($event['eventEnd']);
            
            // old event
            if($now > $end){
                $closed[] = $event;
                
            } else{
                
                // Soon
                if($now < $begin and $begin < strtotime("+".$relevanceCutoff." days")){
                    $soon[] =  $event;
                }
                
                // happening now
                if($now > $begin and $now < $end){
                    $happening[] = $event;
                }
                
                // Planned
                
                if($begin > strtotime("+".$relevanceCutoff." days")){
                    $planned[] = $event;
                }
                
            }

        }
        
        // Rebuild List
        // Limit closed events to previous 5
        $closedLimit = array_slice($closed, -5, 5, true);
        $events = ['closed'=>$closedLimit,'soon'=>$soon,'now'=>$happening,'planned'=>$planned];
        
        return view('events',['events' => $events,'styleCode' => $style,'keys' => $keys]);
        
    }
    
}
