<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    
    public function index(){
        
        // Should get double array of KV pairs from DB for volunteers
        // string for name, string describing person, string for resource location
        $style=parent::getStyle();
        $volunteers = [
            
            ['name' => 'Jarred', 'about' => 'Loves to help code.', 'img' => 'icon.jpg'],
            ['name' => 'George', 'about' => 'Still lost in the forest.', 'img' => 'icon.jpg'],
            ['name' => 'Maxine', 'about' => 'Can time travel!', 'img' => 'icon.jpg'],
            ['name' => 'Harald', 'about' => 'Has a blue tooth.', 'img' => 'man.webp'],
            ['name' => 'Sandy', 'about' => 'Knows sea animals.', 'img' => 'icon.jpg'],
            ['name' => 'JC', 'about' => 'What a shame.', 'img' => 'icon.jpg'],
            ['name' => 'Gordon', 'about' => '...', 'img' => 'icon.jpg'],
            ['name' => 'Lamar', 'about' => 'Somehow made it, in the end', 'img' => 'icon.jpg'],
            ['name' => 'Sandy', 'about' => 'Knows sea animals.', 'img' => 'icon.jpg'],
            ['name' => 'Sandy', 'about' => 'Knows sea animals.', 'img' => 'icon.jpg'],
            ['name' => 'Sandy', 'about' => 'Knows sea animals.', 'img' => 'icon.jpg'],
            ['name' => 'Sandy', 'about' => 'Knows sea animals.', 'img' => 'icon.jpg'],
            ['name' => 'Adam', 'about' => 'I never asked for this...', 'img' => 'icon.jpg'],
            
        ];
        
        return view('volunteers',['volunteers' => $volunteers,'styleCode' => $style]);
        
    }
    
}
