<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
    
    protected $table = 'events';
    
    public $primaryKey = 'id';
    
    protected $fillable = [
        'maxVolunteers', 'description', 'EventBegin', 'EventEnd'
    ];
    
    public $timestamps = true;
    
}
