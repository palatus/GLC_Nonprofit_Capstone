<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Ticket;
use App\User;

class TicketController extends Controller{
    
    public function close($id){
        
        $ticket = Ticket::find($id);
        
        if($ticket == null){
            return back();
        }
        
        // Close the ticket
        $ticket->closed = 1;
        $ticket->save();
        $user = User::find($ticket->userId);
        
        if($user == null){
            return back();
        }
        
        return back()->with('msg','Ticket '.$ticket->id.' closed. Don\'t forget to email the user about their issue! ('.$user->email.')');
        
    }
    
    public function createTicket(){
   
        $user = Auth::user();
        if($user == null){
            return redirect('/');
        }
        $msg = request('desc');
        if(strlen($msg) > 1024){
            return redirect('/contact')->with('msg','Your message should be no more than 1024 characters');
        }
        
        $type = request('itype');

        // Least allowed string length of message
        $shortestMessageLimit = 3;
        
        // This data MUST be an integer id
        if(!is_numeric($type) || !ctype_digit($type)){
            return redirect('/contact')->with('msg','Some data was in bad form!');
        }
        if($user->level == 0){
            return redirect('/contact')->with('msg','An unverified user should refer to our physical contact information listed below.');
        } 
        if(strlen($msg) <= $shortestMessageLimit){
            return redirect('/contact')->with('msg','Your description should contain more information for us.');
        }
        
        // As this is an issue ticket, the recipientId will be default (All administrator users)
        $ticket = new Ticket();
        $ticket->userId = $user->id;
        $ticket->message = $msg;
        $ticket->type = $type;
        $ticket->save();
        
        return redirect('/home')->with('msg','Your ticket was submitted! A administrator will review and email you about the given information');
        
    }
    
}
