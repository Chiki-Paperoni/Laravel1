<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\FirstModel;

class FirstController {
    public function getItems() {
        $test = new FirstModel();
        
        return view("collection",["data"=>$test->items??"none"]);
    }
}