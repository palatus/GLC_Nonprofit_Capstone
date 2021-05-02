<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    
    protected $table = 'tickets';
    
    public $primaryKey = 'id';
    
    protected $fillable = [
        'userId', 'recipientId', 'message', 'type'
    ];
    
    public $timestamps = true;
    
}
