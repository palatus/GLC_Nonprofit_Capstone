<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    
    public function index(){

        // Set page style data
        $style=parent::getStyle();
        
        // We'll switch the id's from 'registered' for their names from the user table when it's finished
        $events = [
            
            ['name' => 'GLC Old Event Test', 'about' => 'Backend Functionality Testing', 'img' => 'temp.png', 'begins' => '24-03-2021 12:00:00', 'ends' => '24-03-2021 16:00:00','registered' => '[0,1,2,3,4]'],
            ['name' => 'March\'s End Drive', 'about' => 'Come get some baked march foods, while we talk about...', 'img' => 'temp.png', 'begins' => '29-03-2021 12:00:00', 'ends' => '30-03-2021 16:00:00','registered' => '[0,1,2,3,4]'],
            ['name' => 'Food Drive for Philly', 'about' => 'Help get food to the needy with us this upcoming...', 'img' => 'temp.png', 'begins' => '29-03-2022 12:00:00', 'ends' => '30-03-2022 16:00:00','registered' => '[0,1,2,3,4]'],
            ['name' => 'Storm Philadelphia', 'about' => 'Let\'s Gather en masse For The 2030 fling!', 'img' => 'temp.png', 'begins' => '29-03-2030 12:00:00', 'ends' => '30-03-2030 16:00:00','registered' => '[0,1,2,3,4]'],
            
        ];
               
        // Lets split up the events by date
        $closed=[];
        $soon=[];
        $happening=[];
        $planned=[];
        
        // Fill the events
        
        // Let's use keys to save important small data for ease of access
        $keys=['now'=>date("d-m-Y H:i:s")];
        $now = strtotime($keys['now']);
        $relevanceCutoff = 30;
        
        // For each event, evaluate its logical time group
        foreach ($events as $event) {
            
            $begin = strtotime($event['begins']);
            $end = strtotime($event['ends']);
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
        
        $events = ['closed'=>$closed,'soon'=>$soon,'now'=>$happening,'planned'=>$planned];
        
        return view('events',['events' => $events,'styleCode' => $style,'keys' => $keys]);
        
    }
    
}
