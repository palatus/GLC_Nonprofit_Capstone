<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    
    protected $table = 'volunteers';
    
    public $primaryKey = 'id';
    
    protected $fillable = [
        'userId', 'eventId'
    ];
    
    public $timestamps = true;
    
}
