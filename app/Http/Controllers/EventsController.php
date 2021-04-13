<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

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
    
    public function index(){

        
        // Set page style data
        $style=parent::getStyle();
        
        // We'll switch the id's from 'registered' for their names from the user table when it's finished
        $events = Event::all();
               
        // Lets split up the events by date
        $closed=[];
        $soon=[];
        $happening=[];
        $planned=[];
        
        // Fill the events
        
        // Let's use keys to save important small data for ease of access
        $keys=['now'=>date("d-m-Y H:i:s")];
        $now = strtotime($keys['now']);
        
        // How many days until an event is considered as "planned" instead of "open"
        $relevanceCutoff = 30;
        
        // For each event, evaluate its logical time group
        foreach ($events as $event) {
            
            $begin = strtotime($event['EventBegin']);
            $end = strtotime($event['EventEnd']);
            
            $event['date'] = date("F", $begin).' '.explode("-",explode(" ",$event['EventBegin'])[0])[2];
            
            $time = date("h.i A", $begin);
            $time2 = date("h.i A", $end);
            
            
            $event['time'] = $time;
            $event['time2'] = $time2;
            $event['year'] = explode("-",explode(" ",$event['EventBegin'])[0])[0];
            
            $end = strtotime($event['EventEnd']);
            $log = '';
            
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
            
            $keys['log'] = $log;

        }
        
        // Rebuild List
        // Limit closed events to previous 5
        $closedLimit = array_slice($closed, -5, 5, true);
        $events = ['closed'=>$closedLimit,'soon'=>$soon,'now'=>$happening,'planned'=>$planned];
        
        return view('events',['events' => $events,'styleCode' => $style,'keys' => $keys]);
        
    }
    
}
