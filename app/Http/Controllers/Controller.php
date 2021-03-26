<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    static function getStyle(){
        return [
            '1' => '#343a40',           // Primary      
            '2' => '#5d6368',           // Secondary
            '3' => '#383e42',           // Tirtiary
            '4' => 'rgba(0,0,0,0.4)'    // Darken
        ];
    }
    
}

