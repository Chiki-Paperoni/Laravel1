<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Item;
use App\FirstModel;

class Collection extends Controller
{
    public function getItems(Request $request) {

        $filter = $request->input('gender');
       
        $c = 0;
        if ($filter) {
            $c = Category::find($filter)->items;
        } else {
            $c = DB::table('items')->get();
        }
        
        
 

        //$test = new FirstModel();
        
        return view("collection",["data"=>$c??"none"]);
        //return view("test",["data"=>$collection??"none","categories" =>$categories,"price" =>$price]);
    }
}
