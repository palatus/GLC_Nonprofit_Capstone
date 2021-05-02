<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ticket;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function paginate($ticketsPerPage, $ticketData){
        
        $splitData = [];
        $group = 0;
        $count = 0;

        foreach($ticketData as $ticket) {
            

            $splitData[$group][$count] = ['email'=>User::find($ticket->userId)->email,'group'=>$group,'ticket' => $ticket];
            
            if(($count!= 0 || $ticketsPerPage == 1) && ($count+1) % $ticketsPerPage == 0){
                
                $group+=1;
                $count=0;
                
            } else {
                
                $count+=1;
                
            }
            
            
        }
        
        if(count($ticketData) % $ticketsPerPage == 0){
            $group -= 1;
        }
        
        return ['data'=>$splitData,'length'=>count($ticketData),'groupSize'=>($group+1)];
        
    }
    
    public function index()
    {
        
        if(Auth::check()){
            
            $style=parent::getStyle();
            $user = Auth::user();
            
            // Non-admin view data
            if($user->level < 2){
                return view('home',['styleCode'=>$style]);
            }
            
            // Get all open tickets if user is an admin
            // Closed tickets still remain in the db
            $ticketsPerPage = 1;
            $tickets = Ticket::where('closed', 0)->get();
            $tickets = $this->paginate($ticketsPerPage,$tickets);
            
            return view('home',['tickets'=>$tickets,'styleCode'=>$style]);
            
        }
        
        return view('login',['styleCode'=>$style]);
    }
}
