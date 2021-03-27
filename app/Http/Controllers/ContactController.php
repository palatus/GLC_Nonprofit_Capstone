<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index(){
        
        // Set page style data
        $style=parent::getStyle();
        
        // Until DB integration
        $testinput = [
            
            ['TestKey00' => 'Test Value', 'TestKey01' => 'Test Value B', 'I Hope' => 'You can see where this is going'],
            
        ];
        
        // Let's use keys to save important small data for ease of access on the front end | Put anything you'd need to reference, here
        $keys=['now'=>date("d-m-Y H:i:s")];
        
        return view('contact',['data' => $testinput,'styleCode' => $style,'keys' => $keys]);
        
    }
    
}
