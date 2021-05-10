<?php

namespace App\Http\Controllers;

use App\Event;
use App\Volunteer;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
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
                    //$happening[] = $event;
                    $soon[] =  $event;
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
        
        return view('welcome',['styleCode' => $style,'events' => $events]);
        
    }
    
}
