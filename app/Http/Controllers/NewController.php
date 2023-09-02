<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index(){
        return view("routing",["id"=> "","data"=> ""]);
    }
    public function post(Request $request){
        $data = $request -> input("name");
        return view('routing',["id"=> "","data"=> $data]);
    }
}
