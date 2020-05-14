<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;
use App\FirstModel;

class Collection extends Controller
{
    public function getItems(Request $request) {

        $filter = $request->input('gender');
       
        
        $c = Category::find($filter)->items;
        
 

        //$test = new FirstModel();
        
        return view("collection",["data"=>$c??"none"]);
        //return view("test",["data"=>$collection??"none","categories" =>$categories,"price" =>$price]);
    }
}
