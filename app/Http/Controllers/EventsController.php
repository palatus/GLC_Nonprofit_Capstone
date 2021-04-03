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
            
            ['name' => 'Old 1', 'about' => 'Backend Functionality Testing', 'img' => 'temp.png', 'begins' => '24-03-2021 12:00:00', 'ends' => '24-03-2021 16:00:00','registered' => '[0,1,2,3,4]'],
            ['name' => 'Old 2', 'about' => 'Come get some baked march foods, while we talk about...', 'img' => 'temp.png', 'begins' => '29-03-2021 12:00:00', 'ends' => '30-03-2021 16:00:00','registered' => '[0,1,2,3,4]'],
            ['name' => 'Old 3', 'about' => 'Functionality Testing', 'img' => 'temp.png', 'begins' => '24-03-2021 12:00:00', 'ends' => '24-03-2021 16:00:00','registered' => '[0,1,2,3,4]'],
            ['name' => 'Old 4', 'about' => 'Functionality Testing', 'img' => 'temp.png', 'begins' => '29-03-2021 12:00:00', 'ends' => '30-03-2021 16:00:00','registered' => '[0,1,2,3,4]'],
            ['name' => 'Old 5', 'about' => 'Functionality Testing', 'img' => 'temp.png', 'begins' => '24-03-2021 12:00:00', 'ends' => '24-03-2021 16:00:00','registered' => '[0,1,2,3,4]'],
            ['name' => 'Old 6', 'about' => 'Functionality Testing', 'img' => 'temp.png', 'begins' => '29-03-2021 12:00:00', 'ends' => '30-03-2021 16:00:00','registered' => '[0,1,2,3,4]'],
            
            ['name' => 'Website Completion', 'about' => 'Better make this quick', 'img' => 'temp.png', 'begins' => '20-04-2021 12:00:00', 'ends' => '20-04-2021 16:00:00','registered' => '[0,1,2,3,4]'],
            ['name' => 'Food Drive for Philly', 'about' => 'Help get food to the needy with us this upcoming...', 'img' => 'temp.png', 'begins' => '01-03-2022 12:00:00', 'ends' => '02-01-2022 16:00:00','registered' => '[0,1,2,3,4]'],
            ['name' => 'Storm Philadelphia', 'about' => 'Let\'s Gather en masse For The 2030 fling!', 'img' => 'temp.png', 'begins' => '05-08-2030 10:00:00', 'ends' => '05-08-2030 14:00:00','registered' => '[0,1,2,3,4]'],
            
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
        
        // How many days until an event is considered as "planned" instead of "open"
        $relevanceCutoff = 30;
        
        // For each event, evaluate its logical time group
        foreach ($events as $event) {
            
            $begin = strtotime($event['begins']);
            $end = strtotime($event['ends']);
            $event['date'] = date("F", $begin).' '.explode("-",explode(" ",$event['begins'])[0])[0];
            
            $time = date("h.i A", $begin);
            $time2 = date("h.i A", $end);
            
            $event['time'] = $time;
            $event['time2'] = $time2;
            $event['year'] = explode("-",explode(" ",$event['begins'])[0])[2];
            
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
        // Limit closed events to previous 5
        $closedLimit = array_slice($closed, -5, 5, true);
        $events = ['closed'=>$closedLimit,'soon'=>$soon,'now'=>$happening,'planned'=>$planned];
        
        return view('events',['events' => $events,'styleCode' => $style,'keys' => $keys]);
        
    }
    
}
