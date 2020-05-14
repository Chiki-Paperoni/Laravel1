<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\FirstModel;
use Illuminate\Http\Request;

class FirstController extends Controller{
    public function getItems(Request $request) {

        $gender = $request->input('gender');
        $sports = $request->input('sports');
        $price = $request->input('price');

        $test = new FirstModel();
        
        return view("collection",["data"=>$test->items??"none","gender" =>$gender,"sports" =>$sports,"price" =>$price]);
    }
}