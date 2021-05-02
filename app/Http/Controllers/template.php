<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CLASS_NAME extends Controller
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
        
        // If using db models
        //$testinput = MODEL_CLASS::all();
        
        $testinput = [
            
            ['TestKey00' => 'Test Value', 'TestKey01' => 'Test Value B', 'I Hope You can see' => ' where this is going'],
           
        ];
        
        // Let's use keys to save important small data for ease of access on the front end | Put anything you'd need to reference, here
        $keys=['now'=>date("d-m-Y H:i:s")];
        
        $keys['NEW_KEY'] = 'NEW_VALUE';
        
        return view('ROUTE_NAME',['data' => $testinput,'styleCode' => $style,'keys' => $keys]);
        
    }
    
}
