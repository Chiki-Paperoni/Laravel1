<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class FirstModel {
    public $obj;
    public $items = 0;
    function __construct() {

        // $this->obj = array();
        // for ($i = 0;$i < 20;$i++ ) {
        //     array_push($this->obj,['name' => "Air Jordan 6 Retro DPM",'cost' => "$200","url" => "air-jordan-8.png"]);
        // }
        // $test = DB::select('select * from items');
        
        $this->items = DB::table('items')->get();
    }

}