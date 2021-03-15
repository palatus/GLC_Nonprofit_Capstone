<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    
    public function index(){
        
        // Should get double array of KV pairs from DB for volunteers
        // string for name, string describing person, string for resource location
        
        $volunteers = [
            
            ['name' => 'Jarred', 'about' => 'Loves to help code.', 'img' => 'icon.jpg'],
            ['name' => 'George', 'about' => 'Still lost in the forest.', 'img' => 'icon.jpg'],
            ['name' => 'Maxine', 'about' => 'Can time travel!', 'img' => 'icon.jpg'],
            ['name' => 'Herald', 'about' => 'Has a blue tooth.', 'img' => 'man.webp'],
            ['name' => 'Sandy', 'about' => 'Knows sea animals.', 'img' => 'icon.jpg'],['name' => 'Sandy', 'about' => 'Knows sea animals.', 'img' => 'icon.jpg'],['name' => 'Sandy', 'about' => 'Knows sea animals.', 'img' => 'icon.jpg'],['name' => 'Sandy', 'about' => 'Knows sea animals.', 'img' => 'icon.jpg'],['name' => 'Sandy', 'about' => 'Knows sea animals.', 'img' => 'icon.jpg'],['name' => 'Sandy', 'about' => 'Knows sea animals.', 'img' => 'icon.jpg'],['name' => 'Sandy', 'about' => 'Knows sea animals.', 'img' => 'icon.jpg'],['name' => 'Sandy', 'about' => 'Knows sea animals.', 'img' => 'icon.jpg'],['name' => 'Sandy', 'about' => 'Knows sea animals.', 'img' => 'icon.jpg'],
            
        ];
        
        return view('volunteers',['volunteers' => $volunteers]);
        
    }
    
}
