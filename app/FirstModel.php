<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class FirstModel {
    public $items = 0;
    function __construct() {
        
        $this->items = DB::table('items')->get();
    }

}